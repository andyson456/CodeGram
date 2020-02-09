@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://yt3.ggpht.com/a/AGF-l7_sGUrG_alh-mdTIDmdcaw1GanuPL2PxVajjQ=s900-c-k-c0xffffffff-no-rj-mo" class="rounded-circle" style="width:100px; height:100px">
        </div>
        <div class="col-9 p-5"]>
            <div>
                <h1>
                    {{ $user->username }}
                </h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>209</strong> posts</div>
                <div class="pr-5"><strong>115</strong> followers</div>
                <div class="pr-5"><strong>215</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row p-5">
        <div class="col-4">
            <img src="https://media.sweetwater.com/api/i/q-82__ha-2cb98b70c96389e7__hmac-a17edd0d60f9f3f7afdfdf8afc2105f8fe01dbef/images/items/750/RG421PFM-large.jpg" class="w-100" style="width:200px; height:200px">
        </div>
        <div class="col-4">
            <img src="https://shop.r10s.jp/jivemusic/cabinet/ap/eg-rg370zb_1.jpg" class="w-100" style="width:200px; height:200px">
        </div>
        <div class="col-4">
            <img src="https://static.turbosquid.com/Preview/001224/146/EE/3D-guitar-ibanez-mtm-1_Z.jpg" class="w-100" style="width:200px; height:200px">
        </div>
    </div>
</div>
@endsection
