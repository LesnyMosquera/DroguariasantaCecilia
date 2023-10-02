<?php

namespace Database\Seeders;

use App\Models\TipoUsuario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoUsuario::create(
            ['tipo_usuario' => 'cliente',
            'descripcion' => 'Usuario sin singun tipo de privilegio'
            ]

        );
        TipoUsuario::create(
            ['tipo_usuario' => 'proveedor',
            'descripcion' => 'Usuario sin ningun tipo de privilegio'
            ]

        );
        TipoUsuario::create(
            ['tipo_usuario' => 'Auxiliar',
            'descripcion' => 'Usuario con privilegios muy restringidos'
            ]

        );
    }
}
