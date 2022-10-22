@extends('app')

@section('content')

  <h1 class="text-center my-3">@lang('content.admin-title')</h1>
  
  <form action="{{ route('admin')}}" method="GET" name="formSearch" id="formSearch">
    @csrf

    <h6>@lang('content.admin-search-title')</h6>
    <div id="serchSolicitude" class="row row-cols-1 g-1 justify-content-center">

      <div class="mb-3 col-2">
        <input type="number" class="form-control" name="searchID" placeholder="ID" value=@if (isset($parameters['searchID'])) {{$parameters['searchID']}} @endif>
      </div>

      <div class="mb-3 col-3">
        <select class="form-select" name="form">
          <option value="">
            @lang('content.admin-search-select-form-option')
          </option>
          <option value="1" @if ($parameters['form'] == 1) selected @endif>
            @lang('content.admin-search-select-form-option1')
          </option>
          <option value="2" @if ($parameters['form'] == 2) selected @endif>
            @lang('content.admin-search-select-form-option2')
          </option>
          <option value="3" @if ($parameters['form'] == 3) selected @endif>
            @lang('content.admin-search-select-form-option3')
          </option>
          <option value="4" @if ($parameters['form'] == 4) selected @endif>
            @lang('content.admin-search-select-form-option4')
          </option>
        </select>
      </div>

      <div class="mb-3 col-3">
        <select class="form-select" name="mode">
          <option value="">
            @lang('content.admin-search-select-mode-option')
          </option>
          <option value="1" @if ($parameters['mode'] == 1) selected @endif>
            @lang('content.admin-search-select-mode-option1')
          </option>
          <option value="2" @if ($parameters['mode'] == 2) selected @endif>
            @lang('content.admin-search-select-mode-option2')
          </option>
        </select>
      </div>

      <div class="mb-3 col-3">
        <select class="form-select" name="submode">
          <option value="">
            @lang('content.admin-search-select-submode-option')
          </option>
          <option value="1" @if ($parameters['submode'] == 1) selected @endif>
            @lang('content.admin-search-select-submode-option1')
          </option>
          <option value="2" @if ($parameters['submode'] == 2) selected @endif>
            @lang('content.admin-search-select-submode-option2')
          </option>
        </select>
      </div>

      <div class="mb-3 col-1">
        <button type="submit" class="btn btn-info hoverUp">
          <i class="bi bi-search"></i>
        </button>
      </div>

    </div>
  </form>

@if (session('success'))
    <h6 class="alert alert-success">
      @lang('content.admin-delete-success')
      {{ session('success') }}
    </h6>
@endif

  <ul id="solicitudesList" class="p-1">

  <li class="list-group-item mb-2">
    <ul class="list-group list-group-horizontal-sm text-center">
      <li class="list-group-item col-12 col-sm-1 d-flex align-items-center justify-content-center">@lang('content.admin-list-title1')</li>
      <li class="list-group-item col-12 col-sm-3 d-flex align-items-center justify-content-center">@lang('content.admin-list-title2')</li>
      <li class="list-group-item col-12 col-sm-2 d-flex align-items-center justify-content-center">@lang('content.admin-list-title3')</li>
      <li class="list-group-item col-12 col-sm-3 d-flex align-items-center justify-content-center">@lang('content.admin-list-title4')</li>
    </ul>
  </li>

  @foreach ($solicitudes as $solicitude)
  <li class="list-group-item col-12 mb-2">
    <ul class="list-group list-group-horizontal-sm text-center">
      <li class="list-group-item col-12 col-sm-1 d-flex align-items-center justify-content-center">{{$solicitude->id}}</li>
      <li class="list-group-item col-12 col-sm-3 d-flex align-items-center justify-content-center">{{$solicitude->form}}</li>
      <li class="list-group-item col-12 col-sm-2 d-flex align-items-center justify-content-center">{{$solicitude->mode}}-{{$solicitude->submode}}</li>
      <li class="list-group-item col-12 col-sm-3 d-flex align-items-center justify-content-center">{{$solicitude->created_at}}</li>
      <li class="list-group-item col-12 col-sm-3 d-flex align-items-center justify-content-center">
        <form action="{{ route('search') }}" method="GET">
          @csrf
          <input type="hidden" name="searchID" value="{{$solicitude->id}}">
          <button type="submit" class="btn btn-info px-2 py-1 mx-1 hoverUp">
            <i class="bi bi-eye"></i>
          </button>
        </form>
        <form action="{{ route('admin-destroy', [$solicitude->id]) }}" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger px-2 py-1 mx-1 hoverUp">
            <i class="bi bi-trash"></i>
          </button>
        </form>
      </li>
    </ul>
  </li>
  @endforeach

  </ul>

  <div class="d-flex justify-content-center">
  {!! $solicitudes->appends($parameters)->links() !!}
  </div>

@endsection