@extends('main-layout.master')
@section('pg-name','My - Space')
@section('content')
  <header>
      <div class="header-content">
          <div class="header-content-inner">
              <h1 id="homeHeading">My Space</h1>
              <hr>
              <p>A social network for everyone.</p>
              <a href="{{ url('/') }}" class="btn btn-primary btn-xl page-scroll">Join Now</a>
          </div>
      </div>
  </header>
@endsection
