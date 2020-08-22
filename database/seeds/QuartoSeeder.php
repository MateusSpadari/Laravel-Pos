<?php

use Illuminate\Database\Seeder;
use App\Models\Quarto;

class QuartoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quartos = [
            [
                'hotel_id' => 1,
                'tipo' => 'Suite de Luxo',
                'descricao' => 'Possui 2 camas Queen e 1 cama king, 2 banheiros e grande sala de estar.',
                'preco' => 900.00,
                'imagem' => 'https://images.unsplash.com/photo-1558882224-dda166733046?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80'
            ],
            [
                'hotel_id' => 1,
                'tipo' => 'Quarto para família',
                'descricao' => 'Possui 4 camas aconchegantes, 3 banheiros e uma varanda incrível.',
                'preco' => 890.00,
                'imagem' => 'https://images.unsplash.com/photo-1537726235470-8504e3beef77?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'
            ],
            [
                'hotel_id' => 2,
                'tipo' => 'Custo benefício',
                'descricao' => 'Quarto para casal com 1 cama King, 1 banheiro e sala de estar grande.',
                'preco' => 540.00,
                'imagem' => 'https://images.unsplash.com/photo-1541194577687-8c63bf9e7ee3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'
            ],
            [
                'hotel_id' => 2,
                'tipo' => 'Quarto precidencial',
                'descricao' => 'Luxo extremo para o casal e os filhos passarem noites maravilhosas.',
                'preco' => 1.200,
                'imagem' => 'https://images.unsplash.com/photo-1571992579655-8134e2b8df0b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80'
            ],
            [
                'hotel_id' => 3,
                'tipo' => 'Suite economica',
                'descricao' => 'Uma suite com o essencial, 3 quartos, 2 banheiros e uma cozinha completa.',
                'preco' => 650.00,
                'imagem' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80'
            ]
        ];

        foreach ($quartos as $quarto) {
            Quarto::create(array(
                'hotel_id' => $quarto['hotel_id'],
                'tipo' => $quarto['tipo'],
                'descricao' => $quarto['descricao'],
                'preco' => $quarto['preco'],
                'imagem' => $quarto['imagem'],
            ));
        }
    }
}
