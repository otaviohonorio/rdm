
<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class applicationHostMappedMigration extends Migration
{
    public function up()
    {
        Schema::create('host_mapped_has_application', function (Blueprint $table) {
            $table->integer('host_id')->unsigned();
            $table->integer('application_id')->unsigned();

            $table->foreign('host_id')
                ->references('id')->on('host_mapped')
                ->onDelete('cascade');
            $table->foreign('application_id')
                ->references('id')->on('application')
                ->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('host_mapped_has_application');
    }
}
