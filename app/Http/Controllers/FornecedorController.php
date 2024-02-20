<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            0 => [
                'nome' => 'Busca busca',
                'ativo' => 'N',
                'cnpj' => '12.3456.7891/123-45',
                'ddd' => '(11)',
                'telefone' => '6063-5323'
            ],
            1 => [
                'nome' => 'Shopee',
                'ativo' => 'S',
                'cnpj' => '87.9265.4819/720-85',
                'ddd' => '(35)',
                'telefone' => '8216-2575'
            ],
            2 => [
                'nome' => 'AliExpress',
                'ativo' => 'N',
                'cnpj' => '43.5123.6122/543-31',
                'ddd' => '(32)',
                'telefone' => '2641-2355'
            ],
            
        ];

        

        return view('app.fornecedor.index', compact('fornecedores'));
        // $fornecedores = ['Fornecedor 1', 'f2', 'f3', 'f4', 'f5', 'f6', 'f7', 'f8', 'f9', 'f10', 'f11'];
        // echo isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado'; -> operador ternário.
    }
}
