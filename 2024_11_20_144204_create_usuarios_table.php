<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->iduser('1,2,3,4,5,6,7,8,9,10,11,12,13,14');
            $table->user_name('avargas','lfajardo','mguerra','airaheta','jcastro','rlopez','nmontoya','utrujillo','eruano','chernandez','emarroquin','emembreño','gfuentes');
            $table->user_password('avargas2025','lfajardo2025','mguerra2025','airaheta2025','JCADM2025','rlopez','nmonterroza2025','utrujillo2025','eruano2025','emartinez2025','chernandez','emarroquin2025','emembreño2025','gfuentes2025');
            $table->user_idemp('1,2,3,4,5,6,7,8,9,10,11,12,13,14');
            $table->user_e('I,I,I,I,A,I,I,A,I,I,I,I,I,I');
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};   
    

            
      
