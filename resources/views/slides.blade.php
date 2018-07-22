@extends('layouts.app')

@section('title')
    <span>Slides Presentation</span>
    <button class="btn btn-info right">?</button>
@endsection

@section('content')
    <div class="pannel">
        <div class="video">
            <h4>&nbsp;↓ this is me ↓&nbsp;</h4>
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
        vue questions
    </div>
@endsection
