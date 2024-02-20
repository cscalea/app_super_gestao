<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //SEEDER DO OBJETO FORNECEDOR
     //3 FORMAS DE INSERIR OS REGISTROS
     //NÃO RECOMENDADO O DB::TABLE INSERT, POIS, NÃO INSERE REGISTROS NAS COLUNAS CREATED_AT E UPDATED_AT
    public function run()
    {
        //Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        //Salvando o objeto no banco
        $fornecedor->save();

        //utilizando o método create, atenção para o atributo protected fillable da classe ( determina parâmetros que podemos inserir pelo método CREATE);
        Fornecedor::create([
            'nome' => 'fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor200.com.br',
        ]);
    
    //insert
    // DB::table('fornecedores')->insert([
    //     'nome' => 'fornecedor 300',
    //         'site' => 'fornecedor300.com.br',
    //         'uf' => 'SC',
    //         'email' => 'contato@fornecedor300.com.br',
    // ]);
}
}