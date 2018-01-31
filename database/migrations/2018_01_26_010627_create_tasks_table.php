<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task');            
            $table->timestamps();
        });
    
        DB::table('tasks')->insert(['task' => 'tarefa 1']);
        DB::table('tasks')->insert(['task' => 'tarefa 2']);
        DB::table('tasks')->insert(['task' => 'tarefa 3']);
        DB::table('tasks')->insert(['task' => 'tarefa 4']);
        DB::table('tasks')->insert(['task' => 'tarefa 5']);
        DB::table('tasks')->insert(['task' => 'tarefa 6']);
        DB::table('tasks')->insert(['task' => 'tarefa 7']);
        DB::table('tasks')->insert(['task' => 'tarefa 8']);
        DB::table('tasks')->insert(['task' => 'tarefa 9']);
        DB::table('tasks')->insert(['task' => 'tarefa 10']);
        DB::table('tasks')->insert(['task' => 'tarefa 11']);
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
