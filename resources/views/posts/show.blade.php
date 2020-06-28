@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="/storage/{{  $post-> image }}" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="col-2 pr-5" >
                            <img src="{{  $post->user->profile->profileImage() }}" style="max-width: 40px;" class="rounded-circle">
                        </div>
                        <div class="d-flex align-items-center">
                           <a href="/profile/{{  $post->user->id }}">
                               <span class=" pl-2 font-weight-bold text-dark">
                                   {{  $post->user->username }}
                               </span>
                           </a> <b class="pl-1">.</b>
{{--                            <a href="#" class="pl-1"><span class="font-weight-bold">Follow</span></a>--}}
                            @cannot('update', $post->user->profile)
                                <follow-button user-id="{{  $post->user->id }}" follows = "{{  $follows }}"></follow-button>
                            @endcan
                        </div>
                    </div>
                    <hr>
                    <div>
                        <a href="/profile/{{  $post->user->id }}">
                            <span class="font-weight-bold text-dark">
                                {{  $post->user->username }}
                            </span>
                        </a>
                        <span> {{  $post->caption }}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
