<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTemplateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('sms_template_accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('template_id')->unsigned();
            $table->foreign('template_id')->references('id')->on('sms_templates');
            $table->json('variable_mapping');
            $table->bigInteger('vendor_account_id')->unsigned();
            $table->foreign('vendor_account_id')->references('id')->on('sms_vendor_accounts');
            $table->string('sender_id');
            $table->foreign('sender_id')->references('sender_id')->on('sms_senders');
            $table->smallInteger('priority')->default(1);
            $table->smallInteger('max_retry_attempts');
            $table->boolean('is_dlt_approved');
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
        Schema::dropIfExists('sms_template_accounts');
    }
}
