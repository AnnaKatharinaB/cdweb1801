@extends('_layouts.master')

@section('body')
<main class="p-8 bg-purple">

   <ul>
       @foreach ($camps as $camp)
            <li><a href="{{ $camp->getUrl() }}">{{  $camp->city }} {{ $camp->date_start }}</a></li>
        @endforeach
   </ul>
</main>

@endsection