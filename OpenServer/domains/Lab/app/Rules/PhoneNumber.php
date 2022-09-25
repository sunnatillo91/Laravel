<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
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
        return substr($value,0,1) == '+' && strlen($value) == 14;
        // return [
        //     'address' => 'required',
        //     'phone' => 'phone:GB'];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
    //    return 'phone' == 'The :attribute field contains an invalid number.';
        
       return 'Telefon raqam + bilan boshlanib 13 raqam kiritilishi kerak.';
    }
}
