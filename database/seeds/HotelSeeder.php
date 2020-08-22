<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            [
                'nome' => 'Colina Silenciosa',
                'localizacao' => 'Silent Hill, SH',
                'descricao' => 'Hotel 1 estrela onde pesadelos não tem vez.',
                'imagem' =>  'https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'
            ],
            [
                'nome' => 'Hotel Moxxy',
                'localizacao' => 'Night City, CA',
                'descricao' => 'Hotel 4 estrelas, durma e acorde sentindo-se outra pessoa.',
                'imagem' =>  'https://images.unsplash.com/photo-1517840901100-8179e982acb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'
            ],
            [
                'nome' => 'Guarapuava City Hotel',
                'localizacao' => 'Guarapuava, PR',
                'descricao' => 'Hotel 5 estrelas, cama de pedra e traveseiro de aço',
                'imagem' =>  'https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'
            ]
        ];

        foreach ($hotels as $hotel) {
            Hotel::create(array(
                'nome' => $hotel['nome'],
                'localizacao' => $hotel['localizacao'],
                'descricao' => $hotel['descricao'],
                'imagem' => $hotel['imagem']
            ));
        }
    }
}
