<!-- TOPページのビュー index.blade.php -->

@extends('layout')

@section('title', 'VINTERBLØD | Top')

@section('top')
<!-- ライブイメージ写真 -->
<img src="{{ asset('images/live.webp') }}" class="member-image">
<p class="tagline">Frozen screams from the North.</p>
<!-- キャッチコピー -->
<section class="fade-section">
  <p>Vinterblød is a Black metal band from Norway.<br>
     Formed in 2022.</p>
</section>
@endsection

@section('menu')
<!-- メニュー -->
<nav class="mobile-nav">
  <ul>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/discography') }}">Discography</a></li>
    <li><a href="{{ url('/live') }}">Live</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</nav>
@endsection