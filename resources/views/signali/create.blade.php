@extends('signali.layouts.app')

@section('head')   
    @parent
    <link href="{{ asset('assets/assets/datetimerpicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form style="" action="" method="POST">

        {{ csrf_field() }}

        <div class="form-group row">
        <label for="signalfrom" class="col-md-2 control-label">Постъпил от:</label>
        <div class="col-md-10">
            <select class="form-control" id="signalfrom" name="signalfrom">
                <option value="" selected="selected">Избери от къде е постъпил сигнала</option>
                <option value="1" >тел. 112</option>
                <option value="2" >тел. 0800 20 800</option>
                <option value="3">Платформа НПО</option>
            </select>
        </div>
        
        </div>  

        <div class="form-group row">
            <label for="signaldate" class="col-md-2 control-label" autocomplete="off">Дата на сигнала:</label>
            <div class="col-md-10">
                <input name="signaldate" type="text" class="form-control" id="signaldate" placeholder="Дата на регистриране на сигнала от служителя" value="{{ old('signaldate') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="identnumber" class="col-md-2 control-label">Идент. №:</label>
            <div class="col-md-10">
                <input name="identnumber" type="text" class="form-control" id="identnumber" placeholder="Идентификационен номер от републиканския тел. 112" value="{{ old('identnumber') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="pod_id" class="col-md-2 control-label">Местоположение:</label>
            <div class="col-md-10">
                <select class="form-control" id="pod_id" name="pod_id">
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="name2" class="col-md-2 control-label">Подател:</label>
            <div class="col-md-10">
                <input name="name" type="text" class="form-control" id="name2" placeholder="Подател на сигнала" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-2 control-label">Телефон:</label>
            <div class="col-md-10">
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Телефонен номер от който е подаден сигнала" value="{{ old('phone') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="adress" class="col-md-2 control-label">Адрес:</label>
            <div class="col-md-10">
                <input name="adress" type="text" class="form-control" id="adress" placeholder="Адрес на подателя на сигнала" value="{{ old('adress') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="opisanie" class="col-md-2 control-label">Описание:</label>
            <div class="col-md-10">
                <textarea rows="4" name="opisanie" class="form-control" id="opisanie" placeholder="Описание на сигнала"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="signal_for_what" class="col-md-2 control-label">Вид нарушение:</label>
            <div class="col-md-10">
                <select class="form-control" id="narushenia" name="narushenia">
                    <option value=""selected="selected">Избери какво е нарушението</option>
                    <option value="1">Незаконна сеч</option>
                    <option value="2">Транспортиране на материали без марки и билет</option>
                    <option value="3">Съхраняване на дървесина без марки и билет</option>
                    <option value="4">Продажба на незаконна дървесина</option>
                    <option value="5">Нарушение на  ЗЛОД</option>
                    <option value="6">Нарушение на ЗРА</option>
                    <option value="7">Пожари</option>
                    <option value="8">Други</option>                       
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="signal_for" class="col-md-2 control-label">Предадено на:</label>
            <div class="col-md-10"><!--Сигналът е за-->
                <select class="form-control" id="send_to" name="send_to">
                    <option value="" selected="selected">Избери на кого е предадено съобщението</option>
                    <option value="101">РДГ Берковица</option>
                    <option value="102">РДГ Благоевград</option>
                    <option value="103">РДГ Бургас</option>
                    <option value="104">РДГ Варна</option>
                    <option value="105">РДГ Велико Търново</option>
                    <option value="106">РДГ Кърджали</option>
                    <option value="107">РДГ Кюстендил</option>
                    <option value="108">РДГ Ловеч</option>
                    <option value="109">РДГ Пазарджик</option>
                    <option value="110">РДГ Пловдив</option>
                    <option value="111">РДГ Русе</option>
                    <option value="112">РДГ Сливен</option>
                    <option value="113">РДГ Стара Загора</option>
                    <option value="114">РДГ Смолян</option>
                    <option value="115">РДГ София</option>
                    <option value="116">РДГ Шумен</option>
                    <option value="201">Северозападно ДП Враца</option>
                    <option value="202">Северно централно ДП Габрово</option>
                    <option value="203">Североизточно ДП Шумен</option>
                    <option value="204">Югозападно ДП Благоевград</option>
                    <option value="205">Южно централно ДП Смолян</option>
                    <option value="206">Югоизточно ДП Сливен</option>
                    <option value="8888">ИАРА</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="send_extra" class="col-md-2 control-label">Предадено още на:</label>
            <div class="col-md-10">
                <input  type="radio" name="send_extra" id="send_extra" value="0" checked />На никой
                <input  type="radio" name="send_extra" id="send_extra" value="1" />Полиция
                <input  type="radio" name="send_extra" id="send_extra" value="2" />Пожарна
                <input  type="radio" name="send_extra" id="send_extra" value="3" />БАБХ
            </div>
        </div>

        <div class="form-group row">
            <label for="deistvie" class="col-md-2 control-label">Предприети действия:</label>
            <div class="col-md-10">
                <textarea rows="2" class="form-control" placeholder="Предприети действия от регистриращия сигнала" name="deistvie" cols="50" id="deistvie"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="deistvie_date" class="col-md-2 control-label" autocomplete="off">Дата на действието:</label>
            <div class="col-md-10">
                <input name="deistvie_date" type="text" class="form-control" id="deistvie_date" placeholder="Дата на предприетите действия от служителя приел сигнала" value="">
            </div>
        </div>

        <div class="form-group row">
            <label for="notes" class="col-md-2 control-label">Забележка:</label>
            <div class="col-md-10">
                <textarea rows="4" class="form-control" placeholder="Забележка" name="notes" cols="50" id="notes"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="policia" class="col-md-2 control-label">Сигнала е предаден на полицията след 22 часа</label>
            <div class="col-md-10">
                <input id="policia" class="checkbox1" name="policia" type="checkbox" value="1">
            </div>
        </div>

        <div class="form-group row">
            <label for="policia" class="col-md-2 control-label"></label>
            <div class="col-md-10">
                <input class="btn btn-info" type="submit" value="Регистриране на сигнала">
            </div>
        </div>  
    </form>
@endsection

@section('script')
    @parent
        
        <script src="{{ asset('assets/assets/datetimerpicker/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/assets/datetimerpicker/js/moment-with-locales.min.js') }}"></script>
        <script src="{{ asset('assets/assets/datetimerpicker/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/assets/datetimerpicker/js/bootstrap-datetimepicker.min.js') }}"></script>

        <script src="{{ asset('assets/assets/js/src/select2.full.min.js') }}"></script>

        <script src="{{ asset('assets/my_js/select2.js') }}"></script>

        <script src="{{ asset('assets/my_js/datetimepicker.js') }}"></script>

@endsection