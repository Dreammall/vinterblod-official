@extends('layout')

@section('title', 'VINTERBLOD | About')

@section('top')
  <h2>ABOUT</h2>
@endsection

@section('menu')
  <!-- メニュー -->
  <nav class="mobile-nav">
    <ul>
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/discography') }}">Discography</a></li>
      <li><a href="#tour">Tour</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>
@endsection

@section('contents')
  <section class="fade-section">
    <p>Den fanger den rene duften av vinter, <br>
       den blodtørstige, frostklare luften og melankolien.</p>
    <br>
  </section>
  <hr>
  <section class="fade-section">
    <h2>MEMBER</h2>
    <img src="{{ asset('/images/member.webp') }}" alt="member-image" class="member-image">
    <p><img src="{{ asset('/images/icon.png') }}" class="icons"> (Vo.) Noctyrant (Gt.) Skjeldr  (Ba.) Mörknir (Dr.) Svartrvind </p>
  </section>
@endsection







