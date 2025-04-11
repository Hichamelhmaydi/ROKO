<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class UpdateAdminPasswordsSeeder extends Seeder
{
    public function run()
    {
        $admins = Admin::all();

        foreach ($admins as $admin) {
            if (!Hash::needsRehash($admin->password)) {
                continue; 
            }

            $admin->password = Hash::make($admin->password);
            $admin->save();
        }

    }
}
