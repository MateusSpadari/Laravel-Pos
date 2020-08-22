<?php

use Illuminate\Database\Seeder;
use App\Models\Reserva;

class ReservaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservas = [
            [
                'usuario_id' => '1',
                'quarto_id' => 1,
                'num_de_convidados' => 4,
                'chegada' => '2020-05-18',
                'partida' => '2020-05-28'
            ],
            [
                'usuario_id' => '1',
                'quarto_id' => 2,
                'num_de_convidados' => 1,
                'chegada' => '2020-05-10',
                'partida' => '2020-05-12'
            ],
            [
                'usuario_id' => '1',
                'quarto_id' => 3,
                'num_de_convidados' => 3,
                'chegada' => '2020-05-06',
                'partida' => '2020-05-07'
            ],
            [
                'usuario_id' => '1',
                'quarto_id' => 4,
                'num_de_convidados' => 2,
                'chegada' => '2020-05-20',
                'partida' => '2020-05-24'
            ],
            [
                'usuario_id' => '1',
                'quarto_id' => 2,
                'num_de_convidados' => 2,
                'chegada' => '2020-05-28',
                'partida' => '2020-06-15'
            ]
        ];

        foreach ($reservas as $reserva) {
            Reserva::create(array(
                'usuario_id' => $reserva['usuario_id'],
                'quarto_id' => $reserva['quarto_id'],
                'num_de_convidados' => $reserva['num_de_convidados'],
                'chegada' => $reserva['chegada'],
                'partida' => $reserva['partida']
            ));
        }
    }
}
