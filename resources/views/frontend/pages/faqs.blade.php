@extends('layouts.frontend.app')

@section('title', config('app.name') . ' | ' . 'FAQs')

@section('content')
    <x-frontend.page-title />
	<x-frontend.faqs />
@endsection