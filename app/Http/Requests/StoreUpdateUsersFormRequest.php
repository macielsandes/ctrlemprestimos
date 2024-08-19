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

       //Verifica se requisitos do formulario foram atendimentos antes de salvar no banco de dados
       $rules = [
               'firstname' => 'required|string|max:255|min:3',
               'lastname' => 'required|string|max:255|min:3',
               'username' => 'required|string|max:255|min:3',
               'email' => [
                'required',
                'email',
                'unique:users',
               ],
               'password' => [
                  'required',
                  'min:8',
                  'max:20',
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

        public function messages(): array
        {
            return [
                'firstname.required' => 'O campo Nome é de preenchimento obrigatório',
                'lastname.required' => 'O campo Sobrenome é de preenchimento obrigatório',
                'username.required' => 'O campo Username é de preenchimento obrigatório',
                'emai.required' => 'O campo E-mail é de preenchimento obrigatório',
                'password.required' => 'O campo Senha é de preenchimento obrigatório',
        ];
        }

}
