<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

use DB;

class TestController extends Controller
{
    
    function test(Request $request){
        var_dump($request->get('info'));die;
        return $this->getArray;
    }

    private function getArray(){
        return [
            'nombre' => 'Pepito',
            'apellido' => 'Perez',
            'edad' => 20,
            'mascota' => [
                'nombre' => 'Firulais',
                'raza' => 'Pitbull'
            ]
        ];
    }

    function testDB(){
        try {
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                Log::emergency('An informational message.');
                echo "Yes! Successfully connected to the DB: " 
                . DB::connection()->getDatabaseName();
            } else {
                echo "No Database Found";
            }
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

}
