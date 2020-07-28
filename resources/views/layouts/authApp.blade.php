@extends('layouts.skeleton')

@section('app')
  <div class="main-wrapper">


    <!-- Main Content -->
      @yield('content')
    <footer class="main-footer">
      @include('partials.footer')
    </footer>
  </div>
@endsection
