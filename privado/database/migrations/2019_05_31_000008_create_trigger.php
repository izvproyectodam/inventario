<?php

use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration {

    public function up()
    {
        //set global log_bin_trust_function_creators=1;
        DB::unprepared(
            'create trigger post_modifica
            after update
               on bien for each row
            begin
                if old.idresponsable <> new.idresponsable or old.idubicacion <> new.idubicacion or old.detalleubicacion <> new.detalleubicacion then
                    insert into historico (idbien, idresponsableprevio, idresponsable, idubicacionprevia, idubicacion, detalleubicacionprevia, detalleubicacion, created_at)
                        values (old.id, old.idresponsable, new.idresponsable, old.idubicacion, new.idubicacion, old.detalleubicacion, new.detalleubicacion, current_timestamp());
                end if;
            end;'
        );
    }

    public function down()
    {
        DB::unprepared('drop trigger post_modifica');
    }
}