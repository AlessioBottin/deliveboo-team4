<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Plate;


class PlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
   
        $plates = Plate::all()->where('user_id', '=', $user_id);
        
        // dd($user_id);
        // dd($plates);

        $data = [
            'plates' => $plates
        ];

        return view('admin.plates.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.plates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // E' sempre richiesta una nuova immagine alla creazione del piatto
        $isImgRequired = true;
        $user_id = Auth::user()->id;

        $form_data = $request->all();        

        $request->validate($this->getValidationRules($isImgRequired));

        $new_plate = new Plate();
        $new_plate->fill($form_data);
        
        $new_plate->slug = Plate::generateSlug($new_plate->name);
        $img_path = Storage::put('plate_images', $form_data['image']);

        $new_plate->image = $img_path;

        $new_plate->user_id = $user_id;

        $new_plate->save();

        return redirect()->route('admin.plates.show', ['plate' => $new_plate->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $user_id = Auth::user()->id;
        
        $plate = Plate::find($id);
        // dd($plate->user_id);
        // dd($user_id);
        

        if( !$plate || $plate->user_id != $user_id ) {
            $data = [
                'error' => 'errore'
            ];
            
        }else{
            $data = [
                'plate' => $plate,
                // 'user_id' => $user_id
            ];
        }

        return view('admin.plates.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $plate = Plate::find($id);

        if( !$plate || $plate->user_id != $user_id ) {
            $data = [
                'error' => 'errore'
            ];
            
        }else{
            $data = [
                'plate' => $plate,
            ];
        }    

        return view('admin.plates.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        // Non e' sempre richiesta una nuova immagine
        // nel form ad esempio nel caso si voglia tenere quella vecchia
        $isImgRequired = false;
        $form_data = $request->all();
        
        // $user_id = Auth::user()->id; 
        $plate = Plate::findOrfail($id);
        
        $request->validate($this->getValidationRules($isImgRequired));

        if($form_data['name'] != $plate->name) {
            $plate->slug = Plate::generateSlug($form_data['name']);
        }

        if(isset($form_data['image'])) {
            //Cancello il file vecchio
            if($plate->image) {
                Storage::delete($plate->image);
            }    
            //Faccio l'upload del nuovo file
            $img_path = Storage::put('plate_images', $form_data['image']);
    
            //Salvo nel form data il path del nuovo file
            $form_data['image'] = $img_path;
        }

        $plate->update($form_data);

        return redirect()->route('admin.plates.show', ['plate' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plate = Plate::findOrFail($id);

        if($plate->img) {
            Storage::delete($plate->img);
        }

        // dd($plate);
        $plate->delete();

        return redirect()->route('admin.plates.index');
    }

    // Validation Rules 
    public function getValidationRules($_isImgRequired) {

        $_isImgRequired ? $imageRules = 'required|image|max:5120' : $imageRules = 'image|max:512';

        return [
            'name' => 'required|max:70',
            'description' => 'required|max:60000',
            'ingredients' => 'required|max:60000',
            'price' => 'required|numeric|between:0.1,999.99',
            'visibility' => 'required|boolean',
            'image' => $imageRules
        ];
    }
}
