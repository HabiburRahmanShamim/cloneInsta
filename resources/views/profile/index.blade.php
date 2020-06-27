@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pl-4 pr-4 pt-4 pb-4" style="display:flex;">
            <img src="{{  $user->profile->profileImage() }}"  style="margin: auto; max-width: 90%; max-height: 90%" class="rounded-circle">

        </div>
        <div class="col-9 pt-4 pl-5">
            <div class="d-flex justify-content-between align-baseline ">
                <div class="d-flex align-items-center pb-2">
                    <div class="h3">{{  $user->username  }}</div>
                    <follow-button user-id="{{  $user->id }}" follows = "{{  $follows }}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>
            <div>
                @can('update', $user->profile)
                    <a href="/profile/{{  $user->id }}/edit">Edit Profile</a>
                @endcan
            </div>
            <div class="d-flex pt-2">
                <div class="pr-5"><strong>{{  $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>{{  $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-5"><strong>{{  $user->following->count() }}</strong> following</div>
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
