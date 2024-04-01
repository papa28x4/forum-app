<?php

namespace Database\Seeders;

use App\Traits\HasForeignKeys;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    use HasForeignKeys;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKey();        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'bio' => NULL,
                'email' => 'admin@example.com',
                'type' => 3,
                'email_verified_at' => '2024-02-20 21:45:56',
                'password' => '$2y$10$pnallMEuPyGYdEw0r0K5MeZHa1oh92W0sqv5SsITQ9vUGMSZdwrha',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => '6zAg2X81YGqUbLX0W0S9TnO83qKQt7l0iIHWu4tPP78jJMbZH0NmjTtlmE42',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:56',
                'updated_at' => '2024-02-20 21:45:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Team Mod',
                'bio' => NULL,
                'email' => 'moderator@example.com',
                'type' => 2,
                'email_verified_at' => '2024-02-20 21:45:56',
                'password' => '$2y$10$3U337lH3Khbph6t54InnJucs6ulXbkp0O/Rv4f5VNQyg4KH6u0PyS',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => '8XNgu2Ue2jTIByWeJcSRwF3iBTQTnd117JbLIPovJNI5kyXpyuTL0YHNDuTz',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:56',
                'updated_at' => '2024-02-20 21:45:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'John Doe',
                'bio' => NULL,
                'email' => 'johndoe@example.com',
                'type' => 1,
                'email_verified_at' => '2024-02-20 21:45:56',
                'password' => bcrypt('12345678'),
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'I8jNLg06kDVjPNa3weEXANC4noUWbAsD277tVz5iQYCG192jrYriJeUhqnRx',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:56',
                'updated_at' => '2024-02-20 21:45:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Rosalinda Durgan',
                'bio' => NULL,
                'email' => 'rosalinda.durgan@example.com',
                'type' => 1,
                'email_verified_at' => '2024-02-20 21:45:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'UPBrLlIXbM',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:57',
                'updated_at' => '2024-02-20 21:45:57',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kattie Schulist',
                'bio' => NULL,
                'email' => 'kattie.schulist@example.com',
                'type' => 1,
                'email_verified_at' => '2024-02-20 21:45:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'UGnJZ52Mvn',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:57',
                'updated_at' => '2024-02-20 21:45:57',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Ila Jast',
                'bio' => NULL,
                'email' => 'ila.jast@example.com',
                'type' => 1,
                'email_verified_at' => '2024-02-20 21:45:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => '61WLo5GtlI',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:57',
                'updated_at' => '2024-02-20 21:45:57',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Lowell Block',
                'bio' => NULL,
                'email' => 'lowell.block@example.com',
                'type' => 1,
                'email_verified_at' => '2024-02-20 21:45:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'o4zs490PBj',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:57',
                'updated_at' => '2024-02-20 21:45:57',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Jamie Spencer',
                'bio' => NULL,
                'email' => 'jamie.spencer@example.com',
                'type' => 1,
                'email_verified_at' => '2024-02-20 21:45:57',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => '6hFuhVZovv',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-02-20 21:45:57',
                'updated_at' => '2024-02-20 21:45:57',
            ),
        ));
        
        $this->enableForeignKey(); 
    }
}