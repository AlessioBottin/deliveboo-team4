<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PlatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $form_data = $request->all();
        $user = Auth::user();
        // dd($form_data);
        $request->validate($this->getValidationRules());

        $new_plate = new Plate();
        $new_plate->fill($form_data);

        // Prendo il path dell'immagine e lo salvo in una variabile che verra' assegnata alla image del plate
        // in questo caso l' immagine viene assegnata due volte prima con il fill e poi adesso, 
        // si potrebbe cambiare al form il nome con cui viene passata l'immagine 
        $img_path = Storage::put('plate_images', $form_data['image']);
        $new_plate->image = $img_path;
        $new_plate->user_id = $user->id;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Validation Rules 
    public function getValidationRules() {
        return [
            'name' => 'required|max:70',
            'description' => 'required|max:60000',
            'ingredients' => 'required|max:60000',
            'price' => 'required|numeric|between:0.1,999.99',
            'visibility' => 'required|boolean',
            'image' => 'required|image|max:512'
        ];
    }
}
