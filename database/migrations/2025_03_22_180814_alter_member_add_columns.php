<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMemberAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member', function (Blueprint $table) {
            $table->integer('yob')->nullable()->after('name');
            $table->string('major')->nullable()->after('yob');
            $table->string('school')->nullable()->after('major');
            $table->string('achievement')->nullable()->after('position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('yob');
            $table->dropColumn('major');
            $table->dropColumn('position');
        });
    }
}
