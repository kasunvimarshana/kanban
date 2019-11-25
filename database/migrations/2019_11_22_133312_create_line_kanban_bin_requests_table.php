<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineKanbanBinRequestsTable extends Migration
{
    protected $table_name_1 = "line_kanban_bin_requests";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
        */
        
        Schema::create($this->table_name_1, function (Blueprint $table) {
            /*
            $table->bigIncrements('id');
            $table->timestamps();
            */
            
            //$table->unsignedBigInteger('id')->default(0)->nullable()->comment('comment');
            //$table->->uuid('id')->default(0)->nullable()->comment('universal unique identifier');
            //$table->dateTime('date_time')->default('CURRENT_TIMESTAMP')->nullable()->change();
            //$table->string('id')->comment('comment');//->index()
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('pk')->default(0)->nullable()->comment('comment');//->index()
            $table->boolean('is_visible')->nullable()->default(false)->comment('comment');//->index()
            $table->boolean('is_active')->nullable()->default(false)->comment('comment');//->index()
            $table->unsignedBigInteger('status_id')->unsigned()->nullable()->comment('comment');//->index()
            //$table->string('colour_id')->nullable()->comment('comment');//->index()
            //$table->string('slug')->unique()->nullable()->comment('comment');//->index()
            //$table->string('code')->nullable()->comment('comment');//->index()
            //$table->string('name')->nullable()->comment('comment');//->index()
            //$table->string('display_name')->nullable()->comment('comment');//->index()
            //$table->text('image_uri')->nullable()->default(null)->comment('uniform resource identifier');//->index()
            $table->timestamp('time_request')->nullable()->useCurrent()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('comment');//->index()
            $table->timestamp('time_response')->nullable()->useCurrent()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('comment');//->index()
            $table->double('quantity_request')->nullable()->default(0)->comment('comment');
            $table->double('quantity_response')->nullable()->default(0)->comment('comment');
            
            $table->string('company_id')->nullable()->comment('comment');//->index()
            $table->string('strategic_business_unit_id')->nullable()->comment('comment');//->index()
            $table->string('factory_id')->nullable()->comment('comment');//->index()
            $table->string('line_id')->nullable()->comment('comment');//->index()
            $table->string('line_kanban_bin_id')->nullable()->comment('comment');//->index()
            //$table->softDeletes();
            //$table->dropPrimary('id');
            //$table->primary('id');
        });
        
        Schema::table($this->table_name_1, function($table) {
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->unique(array('id'), ('unique'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            //$table->foreign('status_id', ('fk'.time().Str::uuid()->toString()))->references('id')->on('statuses')->onUpdate('cascade')->onDelete('set null');
            
            //$table->primary(array('id'), ('pk'.time().Str::uuid()->toString()));
            //$table->index(array('id'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('is_visible'), ('index'.time().Str::uuid()->toString()));
            $table->index(array('is_active'), ('index'.time().Str::uuid()->toString()));
        });
        
        Schema::table($this->table_name_1, function($table) {
            //if (Schema::hasTable('table_name')){}
            if ((Schema::hasColumn($this->table_name_1, 'id')) && (Schema::hasColumn($this->table_name_1, 'pk'))){
                //DB::statement("ALTER TABLE {$this->table_name_1} MODIFY COLUMN pk INTEGER NOT NULL UNIQUE AUTO_INCREMENT;");
                //DB::statement("UPDATE {$this->table_name} SET id = pk");
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('table');
        Schema::dropIfExists($this->table_name_1);
    }
}
