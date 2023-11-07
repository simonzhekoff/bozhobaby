<?php namespace Buzz\Oksireserv\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('buzz_oksireserv_reservations', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')->on('buzz_oksireserv_statuses');

            $table->datetime('date')->nullable();

            $table->char('number', 6);
            $table->char('hash', 32);
            $table->string('locale', 20)->nullable();

            $table->string('email', 300)->nullable();
            $table->string('name', 300)->nullable();
            $table->string('lastname', 300)->nullable();

            $table->string('street', 300)->nullable();
            $table->string('town', 300)->nullable();
            $table->string('zip', 300)->nullable();
            $table->string('phone', 300)->nullable();
            $table->string('usluga', 300)->nullable();

            $table->text('message')->nullable();

            $table->string('ip', 300)->nullable();
            $table->string('ip_forwarded', 300)->nullable();
            $table->string('user_agent', 300)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::table('buzz_oksireserv_reservations', function($table)
        {
            $table->dropForeign('buzz_oksireserv_reservations_status_id_foreign');
        });
        Schema::dropIfExists('buzz_oksireserv_reservations');
    }
}
