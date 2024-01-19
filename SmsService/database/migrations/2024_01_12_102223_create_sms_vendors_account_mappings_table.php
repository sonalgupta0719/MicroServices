<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsVendorsAccountMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('sms_vendors_account_mappings', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('vendor_account_id');
            $table->bigInteger('vendor_account_id')->unsigned();
            $table->foreign('vendor_account_id')->references('id')->on('sms_vendor_accounts');
            // $table->unsignedBigInteger('organization_id');
            $table->bigInteger('organization_id')->unsigned();
            $table->foreign('organization_id')->references('id')->on('organizations');
            // $table->unsignedBigInteger('product_id');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->index(['vendor_account_id', 'organization_id', 'product_id'],'sms_vendors_account_mappings_index');
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
        Schema::dropIfExists('sms_vendors_account_mappings');
    }
}
