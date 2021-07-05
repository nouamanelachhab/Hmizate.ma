@extends('layouts.frontend.app')

@section('title', config('app.name') . ' | ' . 'Locations')

@section('content')
    <x-frontend.page-title />
	<x-frontend.locations-posts />
@endsection