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
            'jumbotrontext'=> '',
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

    public function create(Request $request){

        if($request->isMethod('post')){

            $rules = [
                'signalfrom'     => 'required',
                'signaldate'     => 'required|date',
                'name'           => 'required',
                'identnumber'    => 'required',
                'pod_id'         => 'required',
                'phone'          => 'required',
                'opisanie'       => 'required',  
                'narushenia'     => 'required',  
                'send_to'        => 'required',  
                'deistvie'       => 'required',
                'deistvie_date'  => 'required|date',  
                'deistvie'       => 'required',  
                'deistvie'       => 'required',    
                                                
                

            ];

            
            $this->validate($request, $rules);
            
            dump($request->all());
        }
        
        $data = [
            'title' => 'Тел. 112 - Нов сигнал',
            'jumbotron_title' => 'Нов сигнал',
            'jumbotrontext'=> 'Въвеждане на нов сигнал',
        ];
        
        return view( 'signali.create', $data );
    }

}
