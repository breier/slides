@extends('layouts.app')

@section('title')
    <span>Ask a Question</span>
@endsection

@section('content')
    <div id="ask-form">
        <div class="float-left form-group col-lg-5 col-md-6 col-sm-12">
            <label class="control-label" for="name">Your Name</label>
            <input id="name" class="form-control" type="text">
        </div>
        <div class="float-left form-group col-lg-5 col-md-6 col-sm-12">
            <label class="control-label" for="message">Your Question</label>
            <textarea id="message" class="form-control"></textarea>
        </div>
        <div class="float-left form-group col-lg-2 col-md-12 col-sm-12">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
