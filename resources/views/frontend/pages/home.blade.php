@extends('layouts.frontend.app')

@section('title', config('app.name') . ' | ' . 'Home')

@section('content')
    <x-frontend.home-slider />
	<x-frontend.home-categories />
	<x-frontend.home-cities />
	<x-frontend.home-promotions />
	<x-frontend.recommended-promotions />
	<x-frontend.home-ads />
@endsection