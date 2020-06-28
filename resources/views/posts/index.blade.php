@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row pb-3 justify-content-center ">
                <div class="col-7 border" style="background: white">
                    <div class="row d-flex align-items-center pl-1 pt-2 pb-2">
                        <div class="">
                            <a href="/profile/{{  $post->user->id }}">
                                <img src="{{  $post->user->profile->profileImage() }}" style="max-width: 45px;" class="rounded-circle">
                            </a>
                            </div>
                        <div >
                            <a href="/profile/{{  $post->user->id }}">
                                <span class=" pl-2 font-weight-bold text-dark">
                                    {{  $post->user->username }}
                                </span>
                            </a>
{{--                            <b class="pl-1">.</b>--}}
{{--                            <a href="#" class="pl-1"><span class="font-weight-bold">Follow</span></a>--}}
                        </div>
                    </div>
                    <div class="row">
                        <a href="/p/{{  $post->id }}">
                            {{--                        $post->id means the id of the post--}}
                            <img src="/storage/{{  $post->image }}" class="w-100">
                        </a>
                    </div>
                    <div class="row pl-1 pb-5 pt-1">
                        <a href="/profile/{{  $post->user->id }}">
                            <span class="font-weight-bold text-dark">
                                {{  $post->user->username }}
                            </span>
                        </a><b class="pl-1 pr-1">.</b>
                        <span>{{  $post->caption }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
