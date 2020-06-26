@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pl-4 pr-4 pt-4 pb-4" style="display:flex;">
            <img src="https://th.bing.com/th/id/OIP.TrqiHn-8hoz1tohyRys4PQAAAA?pid=Api&rs=1"  style="margin: auto; max-width: 80%; max-height: 80%" class="rounded-circle">

        </div>
        <div class="col-9 pt-4 pl-5">
            <div class="d-flex justify-content-between align-baseline ">
                <h2>{{  $user->username  }}</h2>
                <a href="/p/create">Add new post</a>
            </div>
            <div>
                <a href="/profile/{{  $user->id }}/edit">Edit Profile</a>
            </div>
            <div class="d-flex pt-2">
                <div class="pr-5"><strong>{{  $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>50.9k</strong> followers</div>
                <div class="pr-5"><strong>261</strong> following</div>
            </div>
            <div class="pt-2"><b>{{  $user->profile->title  }}</b></div>
            <div>{{  $user->profile->description }}</div>
            <div><a href="#"><b>{{  $user->profile->url }}</b></a></div>
        </div>
    </div>
    <div class="row pt-5">
            @foreach( $user->posts as $post)
                <div class="col-4 pb-3">
                    <a href="/p/{{  $post->id }}">
{{--                        $post->id means the id of the post--}}
                        <img src="/storage/{{  $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach

    </div>
</div>
@endsection
