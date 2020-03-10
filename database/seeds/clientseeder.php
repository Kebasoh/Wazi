<?php
use App\client;
use Illuminate\Database\Seeder;

class clientseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(client::class, 10)->create();
    }
}
