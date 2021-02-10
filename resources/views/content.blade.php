@extends('layouts.app')
@section('content')
<div class="space"></div>
    <x-tabs.tab-one />
    <x-tabs.tab-two />
    <x-tabs.tab-three />
    <div class="bspace"></div>

    <!-- <x-tabs.tab-four /> -->
<style>
  .space {
    height: 7vh;
    width: 50px;
  }
  .bspace {
    height: 90px;
    width: 50px;
  }
  @media (max-width: 575.98px) {
    .space {
      height: 11.5vh;
    }
  }
</style>
@endsection