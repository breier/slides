@extends('layouts.app')

@section('title')
    <span>Slides Presentation</span>
    <button class="btn btn-info right">?</button>
@endsection

@section('content')
    <div id="pannel">

        <div class="video">
            <h4 class="text-center">↓ this is me ↓</h4>
            <video autoplay="true" id="videoElement"></video>
        </div>

        <div class="index">
            <h4>Slides Index:</h4>
            <ul>
                <!-- <index v-for="slideName in slidesIndex" name="slideName" full="slideName" :key="slideName"></index> -->
                <li v-for="slideName in slidesIndex">
                    <a :href="'#' + slideName.substring(0, slideName.indexOf('.html'))" @click="setActive(slideName)">
                        @{{ slideName.substring(0, slideName.indexOf('.html')) }}
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="slides">
        <div class="overlay">
            < >
        </div>
        <div class="container" v-html="slideContent"></div>
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
