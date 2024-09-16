<?php

namespace Database\Seeders;

use App\Models\Apartment;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    public function run()
    {

        $apartmentsData=[


            [
                'Nome' => 'Appartamento Milano',
                'Stanze' => 3,
                'Letti' => 2,
                'Bagni' => 1,
                'Metri_quadrati' => 75,
                'Prezzo' => 100,
                'Indirizzo' => 'Via Giovanni Boccaccio, 12, Cologno Monzese, MI, Italia',
                'Latitudine' => 45.46368,
                'Longitudine' => 9.18841,
                'Img' => "https://cf.bstatic.com/xdata/images/hotel/max1280x900/282045872.jpg?k=e4d2a3117babf76d7b185c308c40988b89bab8d720bfec0c8b77aa901032580e&o=&hp=1",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Napoli',
                'Stanze' => 4,
                'Letti' => 3,
                'Bagni' => 2,
                'Metri_quadrati' => 100,
                'Prezzo' => 120,
                'Indirizzo' => 'Via Toledo, Via dei Tribunali, Napoli, NA, Italia',
                'Latitudine' => 40.851798,
                'Longitudine' => 14.26812,
                'Img' => "https://st.hzcdn.com/simgs/pictures/soggiorni/home-staging-appartamento-vuoto-in-vendita-micro-interior-design-img~503160220ccd6834_4-8587-1-f5ce958.jpg",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Firenze',
                'Stanze' => 2,
                'Letti' => 1,
                'Bagni' => 1,
                'Metri_quadrati' => 60,
                'Prezzo' => 90,
                'Indirizzo' => 'Via Palagio degli Spini, Firenze, FI, Italia',
                'Latitudine' => 43.769871,
                'Longitudine' => 11.255576,
                'Img' => "https://st3.idealista.it/news/archivie/styles/fullwidth_xl/public/2016-08/casa-ensueno-brasil12.jpg?VersionId=jgSaLtFxa1yzA8WKrjyvyrDKtTfVAivq&itok=zYIiAsr8",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Torino',
                'Stanze' => 5,
                'Letti' => 4,
                'Bagni' => 3,
                'Metri_quadrati' => 150,
                'Prezzo' => 150,
                'Indirizzo' => 'Via Giuseppe Garibaldi, Torino, TO, Italia',
                'Latitudine' => 45.070339,
                'Longitudine' => 7.686864,
                'Img' => "https://cf.bstatic.com/xdata/images/hotel/max1280x900/586882190.jpg?k=54c3827fe253828c127f9f8acf6e72e76deb78a46f1cf440e5ea2c77e3225288&o=&hp=1",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Roma',
                'Stanze' => 3,
                'Letti' => 2,
                'Bagni' => 2,
                'Metri_quadrati' => 85,
                'Prezzo' => 110,
                'Indirizzo' => 'Via Appia Antica, Roma RM, Italia',
                'Latitudine' => 41.902784,
                'Longitudine' => 12.496366,
                'Img' => 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/489162690.jpg?k=7e671114aa511d795b7b65b81c7351ee25ed50898891c5cb1f16a8996e08ba44&o=&hp=1',
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Genova',
                'Stanze' => 2,
                'Letti' => 1,
                'Bagni' => 1,
                'Metri_quadrati' => 55,
                'Prezzo' => 85,
                'Indirizzo' => 'Via XX Settembre, Genova, GE, Italia',
                'Latitudine' => 44.407062,
                'Longitudine' => 8.93399,
                'Img' => "https://cf.bstatic.com/xdata/images/hotel/max1280x900/562717787.jpg?k=58d2a48b7e8f0e573bc607a544bc4e9188facf22d5f6d8409980de2b8f8f621a&o=&hp=1",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Venezia',
                'Stanze' => 4,
                'Letti' => 3,
                'Bagni' => 2,
                'Metri_quadrati' => 120,
                'Prezzo' => 200,
                'Indirizzo' => 'Via Santa Lucia, Venezia, VE, Italia',
                'Latitudine' => 45.434046,
                'Longitudine' => 12.338166,
                'Img' => "https://c8.alamy.com/compit/2wacc5b/la-rovina-dell-edificio-abbandonato-sta-crollando-la-casa-residenziale-con-piu-appartamenti-e-in-pessime-condizioni-la-poverta-nella-zona-di-confine-e-evidente-2wacc5b.jpg",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Palermo',
                'Stanze' => 2,
                'Letti' => 1,
                'Bagni' => 1,
                'Metri_quadrati' => 70,
                'Prezzo' => 80,
                'Indirizzo' => 'Via Maqueda, Palermo, PA, Italia',
                'Latitudine' => 38.115697,
                'Longitudine' => 13.361267,
                'Img' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmZB3HScZuVqpr-tdK1EMdyyTF5fNAKTmdNQ&s",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Bari',
                'Stanze' => 3,
                'Letti' => 2,
                'Bagni' => 2,
                'Metri_quadrati' => 95,
                'Prezzo' => 95,
                'Indirizzo' => 'Via Giuseppe Capruzzi, Bari BA, Italia',
                'Latitudine' => 41.125594,
                'Longitudine' => 16.866067,
                'Img' => "https://cf.bstatic.com/xdata/images/hotel/max1280x900/279242261.jpg?k=adc7fae710c77d0d15cb7c8451d8ac088b7e51104db0d895c0a09c63ded20ba6&o=&hp=1",
                'Visibilità' => true,
            ],
            [
                'Nome' => 'Appartamento Verona',
                'Stanze' => 5,
                'Letti' => 4,
                'Bagni' => 3,
                'Metri_quadrati' => 160,
                'Prezzo' => 180,
                'Indirizzo' => 'Via del Pestrino, Verona, Italia',
                'Latitudine' => 45.438759,
                'Longitudine' => 10.99162,
                'Img' => "https://www.grazia.it/content/uploads/2017/10/cover-piante-appartamento-mobile-800x600.jpg",
                'Visibilità' => true,
            ]


        ];

        $users= User::all()->pluck('id');

        foreach($apartmentsData as $apartment) {
            $newApartment = New Apartment();
            $newApartment -> user_id = fake()->randomElement($users);
            $newApartment -> nome = $apartment['Nome'];
            $newApartment -> stanze = $apartment['Stanze'];
            $newApartment -> letti = $apartment['Letti'];
            $newApartment -> bagni = $apartment['Bagni'];
            $newApartment -> metri_quadrati = $apartment['Metri_quadrati'];
            $newApartment -> prezzo = $apartment['Prezzo'];
            $newApartment -> indirizzo = $apartment['Indirizzo'];
            $newApartment -> latitudine = $apartment['Latitudine'];
            $newApartment -> longitudine = $apartment['Longitudine'];
            $newApartment -> img = $apartment['Img'];
            $newApartment -> visibilità = $apartment['Visibilità'];
            $newApartment -> save();
        }
    }
}
