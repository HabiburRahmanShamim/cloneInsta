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
                        <div class="col-2 pr-5" style="background: white">
                            <img src="/storage/{{  $post->user->profile->image }}" style="max-width: 40px;" class="rounded-circle">
                        </div>
                        <div>
                           <a href="/profile/{{  $post->user->id }}">
                               <span class=" pl-2 font-weight-bold text-dark">
                                   {{  $post->user->username }}
                               </span>
                           </a>
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
