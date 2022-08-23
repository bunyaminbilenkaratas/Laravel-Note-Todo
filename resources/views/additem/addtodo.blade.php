@extends('layouts.layout')
@section('title', 'Note Uygulaması')
@section('content')
<h3 class="mb-3">Add To Do :</h3>
<form action="{{route('addtodo')}}" method="post">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
            <label for="title" class="form-label">Title: </label>
            <input id="title" name="title" type="text" class="form-control mb-2" placeholder="Write a title for the To Do"  required="" minlength="1" maxlength="250" onChange="edittitle(this)" />
        </div>
        <div class="col-md-6 mb-3">
            <label for="date" class="form-label">date: </label>
            <input id="date" type="date" name="date" class="form-control mb-2" required="" />
        </div>
    </div>


    <label>Choose an icon:</label>
    <div class="row justify-content-center">
        <div class="mb-3 mr-4 d-inline-flex" onclick="checker(this)"><div class="custom-control custom-radio image-checkbox">
                    <input type="radio" class="custom-control-input mr-1" id="cka" name="rd" required="" value="1" checked />
                    <label class="custom-control-label ml-1" for="ck2a">
                        <img src="{{URL::asset('images/icons/alert.svg')}}" alt="#" class="img-fluid custom-icon">
                    </label>
                    </div>
        </div>
        <div class="mb-3 mr-4 d-inline-flex" onclick="checker(this)"><div class="custom-control custom-radio image-checkbox">
                    <input type="radio" class="custom-control-input mr-1" id="ckb" name="rd" value="2" />
                    <label class="custom-control-label ml-1" for="ck2a">
                        <img src="{{URL::asset('images/icons/danger.svg')}}" alt="#" class="img-fluid custom-icon">
                    </label>
                    </div>
        </div>
        <div class="mb-3 mr-4 d-inline-flex" onclick="checker(this)"><div class="custom-control custom-radio image-checkbox">
                    <input type="radio" class="custom-control-input mr-1" id="ckc" name="rd" value="3" />
                    <label class="custom-control-label ml-1" for="ck2a">
                        <img src="{{URL::asset('images/icons/fire.svg')}}" alt="#" class="img-fluid custom-icon">
                    </label>
                    </div>
        </div>
        <div class="mb-3 mr-4 d-inline-flex" onclick="checker(this)"><div class="custom-control custom-radio image-checkbox">
                    <input type="radio" class="custom-control-input mr-1" id="ckd" name="rd" value="4" />
                    <label class="custom-control-label ml-1" for="ck2a">
                        <img src="{{URL::asset('images/icons/flower.svg')}}" alt="#" class="img-fluid custom-icon">
                    </label>
                    </div>
        </div>
        <div class="mb-3 mr-4 d-inline-flex" onclick="checker(this)"><div class="custom-control custom-radio image-checkbox">
                    <input type="radio" class="custom-control-input mr-1" id="cke" name="rd" value="5" />
                    <label class="custom-control-label ml-1" for="ck2a">
                        <img src="{{URL::asset('images/icons/flower2.svg')}}" alt="#" class="img-fluid custom-icon">
                    </label>
                    </div>
        </div>
        <div class="mb-3 mr-4 d-inline-flex" onclick="checker(this)"><div class="custom-control custom-radio image-checkbox">
                    <input type="radio" class="custom-control-input mr-1" id="ckf" name="rd" value="6"/>
                    <label class="custom-control-label ml-1" for="ck2a">
                        <img src="{{URL::asset('images/icons/key.svg')}}" alt="#" class="img-fluid custom-icon">
                    </label>
                    </div>
        </div>
        <div class="mb-3 mr-4 d-inline-flex" onclick="checker(this)"><div class="custom-control custom-radio image-checkbox">
                    <input type="radio" class="custom-control-input mr-1" id="ckg" name="rd" value="7" />
                    <label class="custom-control-label ml-1" for="ck2a">
                        <img src="{{URL::asset('images/icons/pen.svg')}}" alt="#" class="img-fluid custom-icon">
                    </label>
                    </div>
        </div>
    </div>





    <div class="row justify-content-center mt-3">
        <div class="col-md-6 card-body rounded border border-info p-2">
        
            <h4 class="card-title ml-3 mt-2" id="todoid">To Do</h4>
            <i class="plusicon fa-solid fa-circle-plus fa-lg" id="plusicon" onclick="addnewcheck()"></i>
            <i class="trashicon fa-solid fa-trash-can fa-lg" id="trashicon" onclick="deletechecked()"></i>

            <div id="checkboxinputs">

            <div class="checkbox mb-2 ml-4">
                <input type="checkbox" class="checkbox-input mr-3 chk">
                <input type="text" class="form-control d-inline-block aappend" name="a1" placeholder="Write here !" style="width: 60%;" minlength="1" maxlength="100" />
            </div>

            </div>

        </div>
    </div>
    <div class="text-right mb-4">
    <button type="submit" class="btn btn-info mt-2 active">Save</button>
    </div>
</form>
<script src="{{URL::asset('js/checkboxevents.js')}}"></script>
@stop