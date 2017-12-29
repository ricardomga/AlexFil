<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(App\Service::class, 18)->create();
        DB::table('services')->insert([
            'name' => "Inspeção do veículo",
            'description' =>
            "Fazemos um check up gratuito antes da inspecção do seu automóvel, onde um dos nossos técnicos especializados, realizará um diagnóstico dos principais elementos de segurança.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Diagonóstico",
            'description' =>
            "Utilizamos vários tipos de abordagem como objectivo de reduzir o tempo de intervenção do reparador e consequentemente o tempo de imobilização do seu automóvel nas nossas oficinas.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Pneus",
            'description' =>
            "Os pneus desempenham um papel fundamental na estabilidade e na segurança, pois são único ponto de contacto com o solo. Não ultrapasse o limite de desgaste.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Travões",
            'description' =>
            "Os travões são peças do seu automóvel de extrema importância para que usufrua de uma condução em segurança. Faça já uma marcação para saber como se estão os seus travões.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Revisão",
            'description' =>
            "A revisão do seu carro é um momento chave da vida do seu automóvel.
				Respeitar os prazos previstos pelo fabricante e adequados a cada
				automóvel vai permitir optimizar o seu rendimento e longevidade.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Inspeção do veículo",
            'description' =>
            "Fazemos um check up gratuito antes da inspecção do seu automóvel,
			    onde um dos nossos técnicos especializados, realizará um diagnóstico
				dos principais elementos de segurança.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Inspeção do veículo",
            'description' =>
            "Fazemos um check up gratuito antes da inspecção do seu automóvel,
			    onde um dos nossos técnicos especializados, realizará um diagnóstico
				dos principais elementos de segurança.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Diesel",
            'description' =>
            "A nossa longa experiência aliada à tecnologia e equipamentos de
				diagnóstico, permitem a reparação de todos os tipos de bombas injectoras
				dos principais fabricantes mundiais.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('services')->insert([
            'name' => "Turbos",
            'description' =>
            "A reconstrução e reparação de turbos ou de componentes de turbo-compressores
				é assegurada não só pelos melhores equipamentos de diagnóstico do mercado,
				mas também pela experiência e o elevado nível de formação dos nossos profissionais.",
            'image' => "2.jpg",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Abarth",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Alfa Romeo",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Aston Martin",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Audi",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Austin Morris",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Bentley",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Bentley",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "BMW",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Chevrolet",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Chrysler",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Citroën",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Dacia",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Daewoo",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Daihatsu",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Dodge",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "DS",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Datsun",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Ferrari",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Fiat",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Ford",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "GMC",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Honda",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Hummer",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Hyundai",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Isuzu",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Jaguar",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Jeep",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Kia",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Lada",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Lamborghini",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Lancia",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Land ",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Lexus",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Lotus",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Maserati",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Mazda",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Mercedes",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "MG",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "MINI",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Mitsubishi",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Nissan",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Opel",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Peugeot",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Porsche",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Renault",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Rolls ",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Rover",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Saab",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Seat",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Skoda",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Smart",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "SsangYong",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Subaru",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Suzuki",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Tata",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Tesla",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Toyota",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "UMM",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Vauxhall",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Volvo",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "VW",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Triumph",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('makes')->insert([
            'name' => "Outra",
            'created_at' =>  \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
