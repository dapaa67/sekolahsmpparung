<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\User;

class ImportUserFromJsonSeeder extends Seeder
{
    public function run(): void
    {
        $filePath = storage_path('app/users.json');

        if (!File::exists($filePath)) {
            $this->command->error("File users.json tidak ditemukan di: $filePath");
            return;
        }

        $json = File::get($filePath);
        $users = json_decode($json, true);

        if (!is_array($users)) {
            $this->command->error("Isi users.json tidak valid JSON.");
            return;
        }

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'created_at' => $user['created_at'],
                'updated_at' => $user['updated_at'],
            ]);
        }

        $this->command->info("Import user berhasil.");
    }
}
