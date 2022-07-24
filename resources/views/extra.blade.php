@extends('layout.master')

@section('title', "Extra page")
@section('content')


	<h1>Extra page goes to here.</h1>

	@include('partisial.contactform', ['name' => 'Jewel Rana'])
	

	{{-- 
	@component('component.alert')
		@slot('title')
			Alert title goes here.   
		@endslot
		<h2>Someting error for you.</h2>
		<p>Error code: 403</p>
	@endcomponent

	
	--}}

	{{-- @abc
		Something error
	@endabc --}} 

	<x-alert>
		@slot('title')
		    Title of denger messege
		@endslot
		<h2>Something Erroro</h2>
		<p>Lorem ipsum dolor sit amet conse</p>

	</x-alert>



	@section('name')
		@parent

		<h6>It remove or replace or with sectionShow.</h6>
	@endsection

@endsection