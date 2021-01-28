<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto', 45); // Varchar
            $table->integer('cantidadProducto'); // Entero
            $table->float('precioProducto');   // Flotante
            $table->string('fotoProducto', 100);   // Varchar 100
            $table->bigInteger('categoria')->unsigned();
            $table->foreign('categoria')  //Creación de la llave foranea
                  ->references('id')  // Referencia al atributo
                  ->on('categorias')  // De que tabla
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
