@extends('homes.home')

@section('content')
    <div class="desktop-show">
        <div>
            <video src="assets/img/FN2.mp4" autoplay muted loop></video>
            <div class="position-relative">
                <a href="#joinwith-us">
                    <img class="position-absolute bottom-0 start-50 vert-move mb-5" src="assets/img/arrow-bottom.svg" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="mobile-show">
        <div>
            <video class="mt-5" src="assets/img/FN2.mp4" autoplay muted loop></video>
        </div>
    </div>
@endsection