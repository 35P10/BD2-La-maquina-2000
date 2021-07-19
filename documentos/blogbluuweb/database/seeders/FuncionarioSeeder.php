<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Funcionario $funcionario)
    {
        $funcionario->create([
            'Nome'=>'Yasmin'
        ]);
    }
}
