<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('sms_templates', function (Blueprint $table) {
            $table->id();
            // $table->enum('type')->comment('Utility/Auth/Marketing');
            $table->enum('type',['Utility','Auth','Marketing'])->comment('Utility/Auth/Marketing');
            $table->string('code');
            $table->json('variables');
            $table->string('vendor_code')->nullable();
            $table->longText('raw_text')->nullable();
            // $table->unsignedBigInteger('product_id');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            // $table->unsignedBigInteger('organization_id');
            $table->bigInteger('organization_id')->unsigned();
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->index(['code', 'product_id', 'organization_id']);
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sms_templates');
    }
}
