@extends('layout')

@section('title', 'VINTERBLØD | Discography')

@section('top')
<h2>DISCOGRAPHY</h2>
@endsection

@section('menu')
<!-- メニュー -->
<nav class="mobile-nav">
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
    <li><a href="{{ url('/discography') }}">Discography</a></li>
    <li><a href="{{ url('/live') }}">Tour</a></li>
    <li><a href="{{ url('/contact') }}">Contact</a></li>
  </ul>
</nav>
@endsection

@section('contents')    
<div class="fade_section">
  <section id="discography" class="discography">
    <div class="album-listen">
      <img src="{{ asset('images/dusksilence.webp') }}" alt="Duskbound Silence">
      <h2>Duskbound Silence (2024)</h2>
      <p>A bleak and cold journey through snow-covered silence. Featuring atmospheric riffs and haunting howls from the void.</p>
      <p><a href="https://bandcamp.com" target="_blank" style="color: #aaa;">▶ Listen on Bandcamp</a></p>
    </div>
    <div class="album-listen">
      <img src="{{ asset('images/wolvesofmorke.webp') }}" alt="Wolves of Morke">
      <h2>WOLVES OF MORKE (2022)</h2>
      <p>Twin howls under the blood moon. This early release carved VINTERBLOD’s name into the frostbitten landscape.</p>
      <p><a href="https://open.spotify.com" target="_blank" style="color: #aaa;">▶ Listen on Spotify</a></p>
    </div>
  </section>
</div>
@endsection