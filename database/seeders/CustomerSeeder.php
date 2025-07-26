<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        //25 Customer with 10 Invoices each
        Customer::factory()
                ->count(25)
                ->hasInvoices(10)
                ->create();

        //100 Customer with 5 Invoices each
        Customer::factory()
                ->count(100)
                ->hasInvoices(5)
                ->create();

        //100 Customer with 3 Invoices each
        Customer::factory()
                ->count(100)
                ->hasInvoices(3)
                ->create();

        //100 Customer without any Invoice
        Customer::factory()
                ->count(100)
                ->create();
    }
}
