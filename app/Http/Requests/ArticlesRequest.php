<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
            'title'=> 'required ',
            'category'=> 'required ',
            'article'=> 'required' ,
          
            
          
        ];
    }

    public function messages(){
        //metodo per cambiare il messaggio di errore
        //chiave regola da validare
        //valore messaggio di errore se non è stata rispettata la regola
        return[

            'title.required'=> 'non hai inserito il nome del prodotto',
            'category.required'=> 'non hai inserito la categoria del prodotto',
            'article.required'=> 'non hai inserito la descrizione del prodotto',
            


        ];

    }
    
}
