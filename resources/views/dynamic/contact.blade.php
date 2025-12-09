@extends('layout')

@section('title', 'VINTERBLØD | Contact')

@section('top')
<h2>CONTACT</h2>
@endsection

@section('menu')
<!-- メニュー -->
<nav class="mobile-nav">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/discography') }}">Discography</a></li>
    <li><a href="{{ url('/live') }}">Live</a></li>
  </ul>
</nav>
@endsection

@section('contents')
<!-- お問合せ内容入力フォーム -->
<form method="POST" action="{{ route('contact.store') }}">
  @csrf
  <input type="text" name="website" value="" style="display:none" tabindex="-1" autocomplete="off">
  <label>Name: <input type="text" name="name" value="{{ old('name') }}" required maxlength="100"></label><br><br> 
  <label>Email: <input type="email" name="email"></label><br><br>
  <label>Subject: <input type="text" name="subject"></label><br><br>
  <label>Detail: <textarea name="message" required maxlength="5000">{{ old('message') }}</textarea></label><br><br>
  <button type="submit">Review</button>
</form>
@endsection
