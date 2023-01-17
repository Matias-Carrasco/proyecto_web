<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $this->createCentroDistribucion($faker, 3);
        $this->createMedicamentos();
        $this->createFarmacias();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    private function createCentroDistribucion($faker, $cantidad)
    {

        foreach (range(1,$cantidad) as $index) {


            DB::table('centro_distribucions')->insert([
                'cd_codigo' => $faker->numerify('###'),
                'cd_direccion' => $faker->numerify('####'),
                'cd_telefono' => $faker->numerify('########'),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        return true;
    }

    private function createMedicamentos()
    {

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Paracetamol' ,
            'med_compuesto' => 'paracetamol',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Aspirina' ,
            'med_compuesto' => 'ácido acetilsalicílico',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Ibuprofeno' ,
            'med_compuesto' => 'ibuprofeno',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Amoxicilina' ,
            'med_compuesto' => 'amoxicilina',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Metformina',
            'med_compuesto' => 'metformina',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Lipitor',
            'med_compuesto' => 'atorvastatina',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Clopidogrel',
            'med_compuesto' => 'clopidogrel',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Warfarina',
            'med_compuesto' => 'warfarina',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('medicamentos')->insert([
            'med_nombre' => 'Diazepam',
            'med_compuesto' => 'diazepam',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return true;
    }

    private function createFarmacias(){

        DB::table('farmacias')->insert([
            'farm_nombre' => 'Farmacia Amiga',
            'farm_direccion' => 'Av. Pocuro 2909, Providencia, Región Metropolitana',
            'farm_mail' => 'famamig@farmacias.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('farmacias')->insert([
            'farm_nombre' => 'Farmacia Enemiga',
            'farm_direccion' => 'Av. Pocuro 2911, Providencia, Región Metropolitana',
            'farm_mail' => 'famenemi@farmacias.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('farmacias')->insert([
            'farm_nombre' => 'Farmacia Vital',
            'farm_direccion' => 'Av. Pocuro 0911, Providencia, Región Metropolitana',
            'farm_mail' => 'farmavital@farmacias.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
