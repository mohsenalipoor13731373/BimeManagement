@extends('layouts.admin')
@php
$users = \App\User::count();
$userbime = \Modules\UsersBime\Entities\UsersBime::count();
$bime = \Modules\Bime\Entities\Bime::count();
@endphp
@section('content')
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> تعداد کاربران</span>
            <div class="count">{{$users}}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i>بیمه های موجود</span>
            <div class="count green">{{$bime}}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i>بیمه شدگان</span>
            <div class="count green">{{$userbime}}</div>
        </div>
    </div>
@endsection
