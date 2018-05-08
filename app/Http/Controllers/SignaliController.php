<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Signal;

class SignaliController extends Controller
{
 
 
    public function index(){
        
        $data = [
            'title' => 'Тел. 112 - Начало',
            'jumbotron_title' => 'Начална страница',
            'jumbotrontext'=> 'Регистър на сигналите подадени чрез тел. 112 към Изпълнигелна агенция по горите',
        ];
        
        return view( 'signali.index', $data );
    } 

 
 
    public function show(){

       $signali = Signal::orderBy('id', 'DESC')->paginate(25);
        
        $data = [
            'title' => 'Тел. 112 - Всички сигнали',
            'jumbotron_title' => 'Сигнали',
            'jumbotrontext'=> 'Всички сигнали получени чрез тел. 112',
            'signali' => $signali
        ];
        
        return view( 'signali.show', $data );
    }

    public function show_one($id){

        $signal = Signal::whereId($id)->first();

        $data = [
            'title' => 'Сигнал №: '. $id,
            'jumbotron_title' => 'Сигнал №: '.$id,
            'signal' => $signal,
            'jumbotrontext'=> 'Подробно описание на конкретен сигнал №: '.$id
        ];
        
        return view('signali.signal', $data);
    }

    public function create(){
        
        $data = [
            'title' => 'Тел. 112 - Нов сигнал',
            'jumbotron_title' => 'Нов сигнал',
            'jumbotrontext'=> 'Въвеждане на нов сигнал',
        ];
        
        return view( 'signali.create', $data );
    }

}
