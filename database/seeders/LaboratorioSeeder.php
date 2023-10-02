<?php

namespace Database\Seeders;

use App\Models\Laboratorio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laboratorio::create(
            [ 'laboratorio'=>'Novartis',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );

        Laboratorio::create(
            [ 'laboratorio'=>'Roche SAS',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Audifarma',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Pfizer',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Sanoi',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'jannsen',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Bayer',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'MSD',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'La Sante',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Audifarma',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Baster',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Pharma SAS',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Abbot',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'TecnoFarma',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
        Laboratorio::create(
            [ 'laboratorio'=>'Merck',
            'descripcion'=>'Para comunicarse con las oficinas de Novartis Colombia en Bogotá +57 1 6544444',
            'imagen'=>'Img1',
            ]
        );
    }
}
