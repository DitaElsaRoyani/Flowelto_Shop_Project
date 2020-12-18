<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HomeCategori::class);
        //karna dia gabisa manggil langsung makanya make ini 
        //middleware untuk menyambungin namespace'database' langsung ngegrupin semuanya biar bisa dipanggil
        Route::prefix('seeds')->middleware('seeds')->namespace('Database\Seeds')->group(base_path('Database\Seeds\roleadmin_manager.php'));
        $this->call(roleadmin_manager::class);
    }
}
