@extends('layouts.frontend.app')

@section('title', config('app.name') . ' | ' . 'Deals')

@section('content')
    <x-frontend.page-title />
	<x-frontend.home-categories />
	<x-frontend.locations />
@endsection