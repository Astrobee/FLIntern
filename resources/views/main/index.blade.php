@extends('layouts.master')



@section('body')

@include('main.info')

  {{-- GALLERY SECTION  --}}
<hr class="lhr">
@include('gallery.trending')

<br>
<br>
<hr class="lhr">

@include('gallery.field')

@endsection

