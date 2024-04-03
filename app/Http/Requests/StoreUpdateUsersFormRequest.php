<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUsersFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       //Informa que quando o usuario esta verificando com seu propria ID de usuario, não é necessario efetuar validação do campo Nome
       $id = $this->id ??'';
        
       //Regra que faz a validação dos dados antes de efetuar a inseção no banco de dados
       $rules = [
               'name' => 'required|string|max:255|min:3',
               'email' => [
                   'required',
                   'email',
                   "unique:users,email,{$id},id",
               ],
               'password' => [
                  'required',
                  'min:8',
                  'max:15',
               ]
           ];

       //Verifica se esta sendo efetuado uma edição de dados do do campo password e não obriga a informação do campo senha
       if ($this-> method('PUT')){
           $rules['password'] = [
               'nullable',
               'min:8',
               'max:15',
           ];
       }
       return $rules;
  }
    
}
