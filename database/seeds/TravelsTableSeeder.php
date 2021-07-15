<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = [
            [
                'name'=>'Rome',
                'description'=>'Rome, Italian Roma, historic city and capital of Roma provincia (province), of Lazio regione (region), and of the country of Italy.',
                'departure_date'=>'2021-08-12',
                'arrival_date'=>'2021-08-17',
                'transport'=>'Plane',
                'company'=>'Ryanair',
                'price'=>750
            ],
            [
                'name'=>'London',
                'description'=>'London, city, capital of the United Kingdom. It is among the oldest of the world’s great cities—its history spanning nearly two millennia—and one of the most cosmopolitan.',
                'departure_date'=>'2021-08-13',
                'arrival_date'=>'2021-08-21',
                'transport'=>'Plane',
                'company'=>'Ryanair',
                'price'=>650
            ],
            [
                'name'=>'Honolulu',
                'description'=>'Honolulu, capital and principal port of Hawaii, U.S., seat of Honolulu county.',
                'departure_date'=>'2021-08-01',
                'arrival_date'=>'2021-08-22',
                'transport'=>'Plane',
                'company'=>'Ryanair',
                'price'=>1150
            ],
            [
                'name'=>'Paris',
                'description'=>'Paris, city and capital of France, situated in the north-central part of the country.',
                'departure_date'=>'2021-08-14',
                'arrival_date'=>'2021-08-19',
                'transport'=>'Plane',
                'company'=>'Ryanair',
                'price'=>850
            ],
            [
                'name'=>'Vienna',
                'description'=>'Vienna, German Wien, Czech Videň, Hungarian Bécs, city and Bundesland (federal state), the capital of Austria.',
                'departure_date'=>'2021-08-18',
                'arrival_date'=>'2021-08-24',
                'transport'=>'Plane',
                'company'=>'Ryanair',
                'price'=>550
            ]
        ];
        foreach($travels as $travel) {
            $newTravel = new Travel();
            $newTravel->name = $travel['name'];
            $newTravel->description = $travel['description'];
            $newTravel->departure_date = $travel['departure_date'];
            $newTravel->arrival_date = $travel['arrival_date'];
            $newTravel->transport = $travel['transport'];
            $newTravel->company = $travel['company'];
            $newTravel->price = $travel['price'];
            $newTravel->save();
        }
    }
}