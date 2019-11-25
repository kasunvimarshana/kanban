<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\LineKanbanBin;

class LineKanbanBinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newLineKanbanBin = LineKanbanBin::firstOrCreate([
            'id' => 'bin01',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Bin01',
            'display_name' => 'Bin01',
            'line_id' => 'line01'
        ]);
        
        $newLineKanbanBin = LineKanbanBin::firstOrCreate([
            'id' => 'bin02',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Bin02',
            'display_name' => 'Bin02',
            'line_id' => 'line01'
        ]);
        
        $newLineKanbanBin = LineKanbanBin::firstOrCreate([
            'id' => 'bin03',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Bin03',
            'display_name' => 'Bin03',
            'line_id' => 'line01'
        ]);
        
        $newLineKanbanBin = LineKanbanBin::firstOrCreate([
            'id' => 'bin04',
            'is_visible' => true,
            'is_active' => true,
            'code' => 'Bin04',
            'display_name' => 'Bin04',
            'line_id' => 'line01'
        ]);
    }
}
