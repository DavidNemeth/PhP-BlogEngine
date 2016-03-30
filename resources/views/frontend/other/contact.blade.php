@extends('layouts.master')

@section('title')
    Contact me
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}" type="text/css" />
@endsection

@section('content')
    @include('includes.info-box')
    <form action="" method="post" id="contact-form">
        <div class="input-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name"></input>
        </div>
        <div class="input-group">
            <label for="email">Your E-Mail</label>
            <input type="text" name="email" id="email"></input>
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject"></input>
        </div>
        <div class="input-group">
            <label for="message">Your Message</label>
            <textarea name="message" id="message" rows="10"></textarea>
        </div>
        <button type="submit" class="btn">Submit Message</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token"/>
    </form>
@endsection