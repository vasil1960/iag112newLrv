@extends('signali.layouts.app')

@section('content')
     <div class="card" style="width: 100%; text-align: center">
      <div class="card-body">
        {{-- <h5 class="card-title">Постъпили сигнали в ИАГ чрез телефон</h5> --}}
        <p>Добре дошли в системата за регистриране на сигнали от национален телефон 112 към Изпълнителна агенция по горите</p>
        <img src="{{ asset('assets/images/112.jpg') }}"  alt="Телефон 112 на Изпълнителна агенция по горите ">
      </div>
    </div>
    
@endsection