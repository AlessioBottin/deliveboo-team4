<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Plate;

class ValidPlate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $plates_array = $value;
        foreach ($plates_array as $plate) {
            $plate_database = Plate::find($plate['id']);
            $plates_check = false; 

            if($plate_database)  {
                $plates_check = true;
            } else {
                return $plates_check;
            }    
        }
        return $plates_check;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Piatto non trovato';
    }
}
