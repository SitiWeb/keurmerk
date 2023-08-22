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
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('website_id');
            $table->boolean('published')->default(false);
            $table->boolean('identity')->default(false);
            $table->boolean('companyInfo')->default(false);
            $table->boolean('complaints')->default(false);
            $table->boolean('odr')->default(false);
            $table->boolean('rightToWithdraw')->default(false);
            $table->boolean('privacyPolicy')->default(false);
            $table->boolean('cookiePolicy')->default(false);
            $table->boolean('dataRights')->default(false);
            $table->boolean('privacyHandling')->default(false);
            $table->boolean('logicalContactInfo')->default(false);
            $table->string('telefoonnummer')->nullable();
            $table->string('adres')->nullable();
            $table->string('emailadres')->nullable();
            $table->boolean('logicalKVK')->default(false);
            $table->boolean('logicalBTW')->default(false);
            $table->boolean('retourrechtsgeldig')->default(false);
            $table->boolean('retourprocedure')->default(false);
            $table->boolean('klachtrechtsgeldig')->default(false);
            $table->boolean('inbtw')->default(false);
            $table->boolean('optional_fields')->default(false);
            $table->boolean('newsletter_option')->default(false);
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('checklists');
    }
};
