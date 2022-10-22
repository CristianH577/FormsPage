@extends('app')

@section('content')

<form action="{{ route('search')}}" method="GET" name="formSearch" id="formSearch">
  @csrf

  <div id="serchSolicitude" class="row row-cols-1 g-1 justify-content-center mt-3">

    <div class="mb-3">
      <label for="searchID" class="form-label">
        @lang('content.search-searchID-label')
      </label>
      <input type="number" class="form-control" name="searchID" id="searchID" value="{{$id}}">
      <div id="searchIDHelp" class="form-text">
        @lang('content.search-searchID-searchIDHelp')</div>
    </div>

    <div class="d-flex justify-content-center justify-content-sm-end">
      <button type="submit" class="btn btn-primary next">
        @lang('content.search-searchID-submit')
      </button>
    </div>

  </div>
</form>

@if ($id == "")

@elseif ($solicitude === null)
<div class="alert alert-danger mt-5">
  @lang('content.search-noresults')
</div>
@elseif ($solicitude !== null)
<section id="formView">
  <h1 class="text-center my-3">@lang('content.search-title1') #{{$id}} - @lang('content.search-title2') {{$solicitude->form}}</h1>

  @if ($solicitude->mode == 1)
    @include('includes.mode', ['modeShow' => ''])
  @endif

  @if (($solicitude->submode) == 1)
    @include('includes.submode', ['submodeShow' => ''])
  @endif

  @include('includes.requestForm', ['rqFormShow' => ''])
</section>
@endif

<script src="js/search.js"></script>
@endsection