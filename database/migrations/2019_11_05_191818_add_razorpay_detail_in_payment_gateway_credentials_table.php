<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRazorpayDetailInPaymentGatewayCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment_settings', function (Blueprint $table) {
            $table->string('razorpay_key')->nullable()->default(null)->after('stripe_status');
            $table->string('razorpay_secret')->nullable()->default(null)->after('razorpay_key');
            $table->string('razorpay_webhook_secret')->nullable()->default(null)->after('razorpay_secret');
            $table->enum('razorpay_status', ['active', 'deactive'])->default('deactive')->after('razorpay_webhook_secret');
        });

        Schema::table('packages', function (Blueprint $table) {
            $table->string('razorpay_annual_plan_id')->nullable()->default(null)->after('stripe_annual_plan_id');
            $table->string('razorpay_monthly_plan_id')->nullable()->default(null)->after('razorpay_annual_plan_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_settings', function (Blueprint $table) {
            $table->dropColumn('razorpay_key');
            $table->dropColumn('razorpay_secret');
            $table->dropColumn('razorpay_webhook_secret');
            $table->dropColumn('razorpay_status');
        });

        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn('razorpay_annual_plan_id');
            $table->dropColumn('razorpay_monthly_plan_id');
        });
    }
}
