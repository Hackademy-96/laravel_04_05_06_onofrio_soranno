<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>'required| min:5',
            "price"=> 'numeric|required',
            "seller"=> 'required|min:5',
            "img"=>'image',
        ];
    }
    public function messages(){
        return[
            'name.required'=> "Il titolo dell'articolo è obbligatorio",
            'name.min'=> "Il titolo dell'articolo deve essere di minimo 5 caratteri",
            'price.numeric'=> "Il prezzo dell'articolo deve esssere un numero",
            'price.required'=> "Il prezzo dell'articolo è obbligatorio",
            'seller.required'=> "E' obbligatorio inserire il nome dell'azienda",
            'seller.min'=>"Il nome dell'azienda deve essere di minimo 5 caratteri",
            'seller.img'=> "Il file deve essere un'immagine",
        ];
    }
}
