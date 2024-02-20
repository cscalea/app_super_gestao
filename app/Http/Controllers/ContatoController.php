<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato; //Trouxemos a model SiteContato para o CONTEXTO do CONTROLLER para podermos instanciar um objeto da classe

class ContatoController extends Controller
{
    public function contato(Request $request)
    {   //Passamos o objeto request com a variável $request como parâmetro para podermos pegar dados da request
        /*
        echo '<pre>';
        print_r($request->all()); 
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        */

        //1A FORMA DE SALVAR O OBJETO NO BANCO DE DADOS
        /*
$contato = new SiteContato(); //INSTANCIANDO O OBJETO CONTATO
$contato->nome = $request->input('nome');  //ATRIBUINDO VALORES RESGATADOS DO FORMULÁRIO PELOS INPUTS DA REQUEST AOS ATRIBUTOS DO CONTATO
$contato->telefone = $request->input('telefone'); // ...
$contato->email = $request->input('email');   // ...
$contato->motivo_contato = $request->input('motivo_contato');   // ...
$contato->mensagem = $request->input('mensagem');  //ATRIBUINDO VALORES RESGATADOS DO FORMULÁRIO PELOS INPUTS DA REQUEST AOS ATRIBUTOS DO CONTATO

 print_r($contato->getAttributes());
$contato->save();   Salvando o objeto contato no banco de dados.
*/
        //2A FORMA DE SALVAR O OBJETO NO BANCO DE DADOS
        /*
        $contato = new SiteContato(); //Instancia o objeto SiteContato
        $contato->fill($request->all()); //utiliza o método fill, com a variável $request->all(), ou seja, todos os INPUTS da request, fill "preenchem" o objeto contato instanciado
        $contato->save();
        //OU ...
        $contato->create($request->all()); // cria o objeto e também precisa do fillable no model determinando parâmetros que podem ser preenchidos.
        //PARA QUE A SEGUNDA FORMA FUNCIONA, É NECESSÁRIO PRENCHER O ATRIBUTO PROTECTED FILLABLE NA MODEL SITECONTATO
        */
        return view('site.contato', ['titulo' => 'Contato (teste)']);
        
    }

    public function salvar(Request $request) {

        //realizar a validação dos dados do formulário recebidos no request
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
        // SiteContato::create($request->all());
    }
}
