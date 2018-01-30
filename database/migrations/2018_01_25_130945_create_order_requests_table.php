<?php




use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('completedDate');
            $table->string('requestedDate');
            $table->string('state');
            $table->integer('uId');

            $table->integer('realOrganicQuantity');
            $table->integer('realPlasticQuantity');
            $table->integer('realPaperQuantity');
            $table->integer('realGlassQuantity');
            $table->integer('realMetalQuantity');
            $table->integer('realElectronicQuantity');

            $table->integer('expectedOrganicQuantity');
            $table->integer('expectedPlasticQuantity');
            $table->integer('expectedPaperQuantity');
            $table->integer('expectedGlassQuantity');
            $table->integer('expectedMetalQuantity');
            $table->integer('expectedElectronicQuantity');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_requests');
    }
}
