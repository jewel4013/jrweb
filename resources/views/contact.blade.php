@extends('layout.master')

@section('title', 'Contact Page')

@section('content')
	<h1>Contact page</h1>
	<p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Consequuntur recusandae eius aperiam minima vero, similique quia. Facilis dolorum voluptates optio accusamus, doloribus atque dicta at rem? Dolor, voluptatibus et explicabo?
	Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Vero reprehenderit, distinctio consequatur maxime rerum, illo vitae a. Commodi alias voluptate odit, voluptatum quidem vel, provident nam, nihil ullam praesentium officiis?</p>

	@include('partisial.contactform', ['name' => 'John Due'])
@endsection