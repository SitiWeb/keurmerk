<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->unsignedBigInteger('wordpress_id')->nullable();
            // Define foreign key constraint for user_id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('mollie_customer_id')->nullable();
            $table->string('mollie_mandate_id')->nullable();
            $table->decimal('tax_percentage', 6, 4)->default(0); // optional
            $table->dateTime('trial_ends_at')->nullable(); // optional
            $table->text('extra_billing_information')->nullable(); // optional
            $table->timestamps();

         
        });
    }

    public function down()
    {
        Schema::dropIfExists('websites');
    }
};
