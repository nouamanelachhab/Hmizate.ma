@extends('layouts.frontend.app')

@section('title', config('app.name') . ' | ' . 'Cart')

@section('content')
    <x-frontend.page-title />
	<x-frontend.cart />
	<x-frontend.home-ads />
@endsection