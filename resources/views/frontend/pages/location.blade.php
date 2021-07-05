@extends('layouts.frontend.app')

@section('title', config('app.name') . ' | ' . 'Location')

@section('content')
    <x-frontend.page-title />
    <x-frontend.home-categories />
	<x-frontend.locations />
@endsection