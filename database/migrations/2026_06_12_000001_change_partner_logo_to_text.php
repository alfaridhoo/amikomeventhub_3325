<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'pgsql') {
            DB::statement('ALTER TABLE partners ALTER COLUMN logo TYPE TEXT');
            DB::statement('ALTER TABLE partners ALTER COLUMN logo SET NOT NULL');
        } else {
            DB::statement('ALTER TABLE partners MODIFY logo TEXT NOT NULL');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $driver = DB::getDriverName();

        if ($driver === 'pgsql') {
            DB::statement('ALTER TABLE partners ALTER COLUMN logo TYPE VARCHAR(255)');
            DB::statement('ALTER TABLE partners ALTER COLUMN logo SET NOT NULL');
        } else {
            DB::statement('ALTER TABLE partners MODIFY logo VARCHAR(255) NOT NULL');
        }
    }
};
