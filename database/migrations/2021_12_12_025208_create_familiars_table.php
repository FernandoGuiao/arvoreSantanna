<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiares', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('genero', ['f', 'm']);
            $table->string('apelido')->nullable();
            $table->string('profissao')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->date('data_falecimento')->nullable();
            $table->unsignedBigInteger('genitor_familiar_id')->nullable()->constrained();
            $table->unsignedBigInteger('genitor_agregado_id')->nullable()->constrained();
            $table->boolean('is_agregado')->default(false);
            $table->unsignedBigInteger('agregado_de_id')->nullable()->constrained();
            $table->boolean('is_adotado')->default(false);
            $table->string('nac_pais')->nullable();
            $table->string('nac_estado')->nullable();
            $table->string('nac_cidade')->nullable();
            $table->string('email')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();            
            $table->string('end_cep')->nullable();
            $table->string('end_pais')->nullable();
            $table->string('end_estado')->nullable();
            $table->string('end_cidade')->nullable();
            $table->string('end_bairro')->nullable();
            $table->string('end_rua')->nullable();
            $table->string('end_numero')->nullable();
            $table->text('obs')->nullable();
            $table->timestamps();
        });
        Schema::table('familiares', function (Blueprint $table) {
            $table->foreign('genitor_familiar_id')->references('id')->on('familiares');
            $table->foreign('genitor_agregado_id')->references('id')->on('familiares');
            $table->foreign('agregado_de_id')->references('id')->on('familiares');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiares');
    }
}
