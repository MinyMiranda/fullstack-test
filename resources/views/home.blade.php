@extends('layouts.app')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<transition name="fade" mode="out-in">
    <router-view />
</transition>
@endsection