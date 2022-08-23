@extends('layouts.layout')
@section('title', 'Note Uygulaması')
@section('content')
    <h3 class="mb-3">Add Note :</h3>
    <form action="{{route('addnote')}}" method="post">
        @csrf
    <div class="row">
    <div class="col-md-6 mb-3">
    <label for="title" class="form-label">Title: </label>
    <input id="title" type="text" name="title" class="form-control mb-2" placeholder="Write a title for the note" required="" minlength="1" maxlength="250"/>
    </div>
</div>

    <div class="form-outline">
    <label for="title" class="form-label">Note:</label>
        <textarea class="form-control mb-4 h15rem" name="content" id="textAreaExample1" placeholder="Type or paste a note ..."  required="" minlength="1" maxlength="6500"></textarea>
    </div>

    
        <div class="text-right mb-4">
            <button type="submit" class="btn btn-info active">Save</button>
        </div>
    
    </form>
@stop