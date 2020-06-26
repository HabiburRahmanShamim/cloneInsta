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
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex pt-2">
                <div class="pr-5"><strong>304</strong> posts</div>
                <div class="pr-5"><strong>50.9k</strong> followers</div>
                <div class="pr-5"><strong>261</strong> following</div>
            </div>
            <div class="pt-2"><b>{{  $user->profile->title  }}</b></div>
            <div>{{  $user->profile->description }}</div>
            <div><a href="#"><b>{{  $user->profile->url }}</b></a></div>
        </div>
    </div>
    <div class="row pt-5">
            <div class="col-4" >
                <img src="https://instagram.fdac23-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.107.924.924a/s640x640/101418871_149220720095600_2797518877581952974_n.jpg?_nc_ht=instagram.fdac23-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=JlIM9q_nBgoAX_jw1ur&amp;oh=cbf73eef2032f4da8d6f633d08c89167&amp;oe=5F1B9A4A" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.fdac23-1.fna.fbcdn.net/v/t51.2885-15/e35/c64.0.548.548a/100898919_639147106680041_7770796487488702501_n.jpg?_nc_ht=instagram.fdac23-1.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=1T9oPYhgzXUAX8NSflI&amp;oh=9d628323387b2222a44bf02fb5a0fc34&amp;oe=5F1CE905" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.fdac23-1.fna.fbcdn.net/v/t51.2885-15/e35/c127.0.495.495a/100950429_172849147497410_8469189274443807895_n.jpg?_nc_ht=instagram.fdac23-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=_f-WGoHAW8sAX_vf21M&amp;oh=5d113f69ab7b56fa35a4279175a1f17a&amp;oe=5F1CBD84" class="w-100">
            </div>
    </div>
</div>
@endsection
