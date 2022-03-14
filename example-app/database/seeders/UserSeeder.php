<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = User::factory()->create([
            'name' => 'customer',
            'email' => 'customer@mydavinci.nl',
            'password' => Hash::make('test1234')
        ]);
        $customer->assignRole('customer');

        $sales = User::factory()->create([
            'name' => 'Sales',
            'email' => 'salesr@mydavinci.nl',
            'password' => Hash::make('test1234')
        ]);
        $sales->assignRole('sales');

        $student = User::factory()->create([
            'name' => 'student',
            'email' => 'student@mydavinci.nl',
            'password' => Hash::make('test1234')
        ]);
        $student->assignRole('student');

        $teacher = User::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@mydavinci.nl',
            'password' => Hash::make('test1234')
        ]);
        $teacher->assignRole('teacher');

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@mydavinci.nl',
            'password' => Hash::make('test1234')
        ]);
        $admin->assignRole('admin');
    }
}
