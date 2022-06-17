<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_tasks_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('task_name',2500)->nullable();
            $table->string('created_by')->nullable();
            $table->date('created_date')->nullable();
            $table->string('updated_by')->nullable();
            $table->date('updated_date')->nullable();
            $table->string('deleted_by')->nullable();
            $table->date('deleted_date')->nullable();
            $table->integer('task_status')->nullable();
            $table->integer('task_source')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_tasks_list');
    }
}
