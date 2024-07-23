<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->create([
      'name'     => 'VM48',
      'email'    => 'vm48@yandex.ru',
      'password' => bcrypt('password'),
    ]);
    Feature::factory()->create([
      'image'            => 'https://static.tildacdn.com/tild3135-3335-4238-b766-623561633538/plussvg.png',
      'route_name'       => 'feature1.index',
      'name'             => 'Calculate Sum',
      'description'      => 'Calculate sum of two numbers',
      'required_credits' => 1,
      'active'           => true,
    ]);
    Feature::factory()->create([
      'image'            => 'https://imgpng.ru/d/minus_PNG37.png',
      'route_name'       => 'feature2.index',
      'name'             => 'Calculate Difference',
      'description'      => 'Calculate difference of two numbers',
      'required_credits' => 3,
      'active'           => true,
    ]);
    Package::factory()->create([
      'name'    => 'Basic',
      'price'   => 5,
      'credits' => 20,
    ]);
    Package::factory()->create([
      'name'    => 'Silver',
      'price'   => 20,
      'credits' => 100,
    ]);
    Package::factory()->create([
      'name'    => 'Gold',
      'price'   => 50,
      'credits' => 500,
    ]);
  }
}
