@extends('layouts.frontend.app')

@section('title', config('app.name') . ' | ' . 'Checkout')

@section('content')
    <x-frontend.page-title />
	<x-frontend.checkout />
	<x-frontend.home-ads />
@endsection