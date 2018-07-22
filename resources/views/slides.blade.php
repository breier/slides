@extends('layouts.app')

@section('title')
    <span>Slides Presentation</span>
    <button class="btn btn-info right">?</button>
@endsection

@section('content')
    <div class="pannel">
        <div class="video">
            <h4 class="text-center">↓ this is me ↓</h4>
            <video autoplay="true" id="videoElement"></video>
            <script type="text/javascript">
                var video = document.querySelector("#videoElement");

                if (navigator.mediaDevices.getUserMedia) {
                    navigator.mediaDevices.getUserMedia({video: true})
                        .then(function(stream) {
                            video.srcObject = stream;
                        })
                        .catch(function(err0r) {
                            console.log("Something went wrong!");
                        });
                }
            </script>
        </div>
        <div class="clearfix"></div>
        <div class="index">
            <h4>Slides Index:</h4>
            <ul>
                <li>slide 01</li>
                <li>slide 02</li>
                <li>slide 03</li>
                <li>...</li>
            </ul>
        </div>
    </div>

    <div class="slides">
        4:3
    </div>

    <div class="questions">
        <h4>Questions:</h4>
        <div id="questions">
            <div class="question-asked">
                <button class="btn close">&times;</button>
                <div class="user-name">Someone asked:</div>
                <div class="user-message">What about that Something that does nothing but we wanted it to do anything?</div>
            </div>
            <div class="question-asked">
                <button class="btn close">&times;</button>
                <div class="user-name">Someone</div>
                <div class="user-message">What about that Something that does nothing but we wanted it to do anything?</div>
            </div>
        </div>
        <div class="ask-link">
            <div class="text-center">Scan me to ask a question.</div>
            <a href="{{ URL::route('slides.ask') }}">
                {!! QrCode::size(230)->generate(URL::route('slides.ask')); !!}
            </a>
        </div>
    </div>
@endsection
