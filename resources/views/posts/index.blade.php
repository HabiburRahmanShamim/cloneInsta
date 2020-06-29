@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-3 h-auto mt-3 pt-3 float-right sticky-top" style="background: white ;z-index: 2;">
            <div>
                <div class="d-flex align-items-center">
                    <div class="col-2 pr-5" >
                        <a href="/profile/{{  Auth::user()->id }}">
                            <img src="{{  Auth::user()->profile->profileImage() }}" style="max-width: 40px;" class="rounded-circle position-relative">
                        </a>
                    </div>
                    <div>
                        <a href="/profile/{{  Auth::user()->id }}">
                               <span class=" pl-2 font-weight-bold text-dark">
                                   {{  Auth::user()->username }}
                               </span>
                        </a><br>
                        <span class="pl-2"> {{  Auth::user()->profile->title }}</span>
                    </div>
                </div>
                <hr>
                <div>
                    <a href="/profile/{{  Auth::user()->id }}">
                            <span class="font-weight-bold text-dark">
                                {{  Auth::user()->username}}
                            </span>
                    </a>
                    <span>
                        {{  Auth::user()->profile->description }}
                    </span>
                </div>
            </div>
        </div>
        <div class="col-9">
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
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{  $posts->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
