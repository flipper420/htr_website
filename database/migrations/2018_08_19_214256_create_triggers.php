<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /** users triggers **/
        DB::unprepared("
        CREATE TRIGGER addThings AFTER INSERT ON users FOR EACH ROW
            BEGIN
                INSERT INTO rank_user (rank_id, user_id) VALUES (1, NEW.id);
                INSERT INTO total_points (user_id, points) VALUES (NEW.id, 0);
            END;
        ");
        DB::unprepared("
        CREATE TRIGGER updateTotal AFTER INSERT ON points FOR EACH ROW
            BEGIN
                IF NEW.dir = 'add' THEN
                    UPDATE total_points SET points = points + NEW.points WHERE user_id = NEW.user_id;
                    ELSEIF NEW.dir = 'sub' THEN
                    UPDATE total_points SET points = CAST(points AS SIGNED) - CAST(NEW.points as SIGNED) WHERE user_id = NEW.user_id;
                    END IF;
            END;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `addThings`');
        DB::unprepared('DROP TRIGGER `updateTotal`');
    }
}