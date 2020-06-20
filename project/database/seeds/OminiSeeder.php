<?php
use App\Omino;
use Illuminate\Database\Seeder;

class OminiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Omino::class, 100) -> create();
    }
}
