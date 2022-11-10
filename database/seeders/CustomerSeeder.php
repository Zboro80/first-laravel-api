<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
            ->count(25)
            ->hasinvoice(10)
            ->create();
        
        Customer::factory()
            ->count(100)
            ->hasinvoice(5)
            ->create();
            
        Customer::factory()
            ->count(25)
            ->hasinvoice(3)
            ->create();
            
        Customer::factory()
            ->count(5)
            ->hasinvoice(0)
            ->create();
            
    }
    /**
     */
    function __construct() {
    }
}
