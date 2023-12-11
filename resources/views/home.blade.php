@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://yt3.googleusercontent.com/ytc/APkrFKaqca-xQcJtp1Pqv-APucCa0nToHYGPVT00YBGOSw=s900-c-k-c0x00ffffff-no-rj" alt="Main Logo" style="height: 200px" class="rounded-circle"/>
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username}}</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>594</strong>posts</div>
                <div class="pe-5"><strong>152k</strong>followers</div>
                <div class="pe-5"><strong>425</strong>following</div>
            </div>
            <div class="pt-4 fw-bold">
                {{ $user->profile->title }}
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div class="fw-bold">
                <a href="#">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-instagram-new-square2-512.png" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-instagram-new-square2-512.png" class="w-100"/>
        </div>
        <div class="col-4">
            <img src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-instagram-new-square2-512.png" class="w-100"/>
        </div>
    </div>
</div>
@endsection
