@extends('layout')

@section('title', 'VINTERBLØD | CONTACT')

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
<!-- サンクス画面 -->
<p>The message is heard.</p><br>
<p>The night will whisper back.</p><br>
<br><br>
<p>Thank you for reaching VINTERBLØD.</p>
<a href="{{ url('/') }}">HOME</a>
@endsection