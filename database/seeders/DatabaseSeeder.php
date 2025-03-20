<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // تعطيل الـ Foreign key مؤقتًا
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('model_has_roles')->truncate();
        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // استدعاء Seeder الخاص بالأدوار والصلاحيات أولًا
        $this->call(RolePermissionSeeder::class);

        // إنشاء المستخدم
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        // إعطاء الدور (admin مثلاً) من الموجود في RolePermissionSeeder
        $user->assignRole('admin');
    }
}
