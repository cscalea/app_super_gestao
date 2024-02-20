<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

     //AO CHAMAR DB:SEED, IRÁ REPROCESSAR TODAS AS SEEDERS, 
    //ENTÃO DEVEMOS COMENTAR AS CALLS QUE NÃO QUEREMOS QUE
    // SEJA EXECUTADA OU ESPECIFICAR NO ARTISAN
    // PHP ARTISAN DB:SEED --class=SiteContatoSeeder
    
    //CALLS DAS SEEDERS ABAIXO
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);
    }
}