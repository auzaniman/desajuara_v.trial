<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreSuratDomisiliRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'user_id' => 'required',
          'nama_pemohon' => 'required',
          'email_pemohon' => 'required',
          'bukti_ktp' => 'required|image',
          'bukti_kk' => 'required|image',
          'bukti_pengantar' => 'required|image',
        ];
    }
}
