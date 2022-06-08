<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('name');

            $table->foreignIdFor(\App\Models\Project::class);

            $table->text('description')->nullable();
            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_end')->nullable();

            $table->timestamps();
        });

        Schema::create('user_task', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\User::class);
            $table->foreignIdFor(\App\Models\Task::class);

            $table->timestamps();
        });

        Schema::create('task_label', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(\App\Models\Task::class);
            $table->foreignIdFor(\App\Models\Label::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('user_task');
        Schema::dropIfExists('task_label');
    }
}
