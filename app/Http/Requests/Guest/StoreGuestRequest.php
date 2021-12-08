<?php

namespace App\Http\Requests\Guest;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name'                    => ['string', 'max:255'],
        'guest_type'              => ['string', 'max:255'],
        'approve_type'            => ['string', 'max:255'],
        'place_of_issue'          => ['string', 'max:255'],
        'date_of_birth'           => ['date'],
        'email'                   => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone_of_work'           => ['required', 'numeric', 'min:10'],
        'category'                => ['string', 'max:255'],
        'nationalty'              => ['string', 'max:255'],
        'id_copy'                 => ['numeric', 'min:10'],
        'date_of_expiry'          => ['date'],
        'kind'                    => ['string', 'max:255'],
        'phone'                   => ['required', 'numeric', 'min:10'],
        'place_of_work'           => ['string', 'max:255'],
        'address'                 => ['string', 'max:255'],
        'note'                    => ['string', 'max:255'],
        'note_2'                  => ['string', 'max:255'],
        'approve_number'          => ['numeric', 'min:10'],
        
        ];
    }
}
