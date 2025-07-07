<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('id_number')->unique();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->string('cv')->nullable();
            $table->string('degree')->nullable();
            $table->string('id_doc')->nullable();
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade');
            $table->foreignId('district_id')->constrained('districts')->onDelete('cascade');
            $table->foreignId('sector_id')->constrained('sectors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
