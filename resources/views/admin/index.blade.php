@extends('app')

@section('content')

  <h1 class="text-center my-3">@lang('content.admin-title')</h1>
  
  <form action="{{ route('admin')}}" method="GET" name="formSearch" id="formSearch">
    @csrf

    <h6>@lang('content.admin-search-title')</h6>
    <div id="serchSolicitude" class="row g-1 mb-3 justify-content-center">

      <div class="mb-1 col-12 col-sm-2">
        <input type="number" class="form-control" name="searchID" placeholder="ID" value=@if (isset($parameters['searchID'])) {{$parameters['searchID']}} @endif>
      </div>

      <div class="mb-1 col-12 col-sm-3">
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

      <div class="mb-1 col-12 col-sm-3">
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

      <div class="mb-1 col-12 col-sm-3">
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

      <div class="mb-1 col-1">
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

  <div class="mb-2 d-none d-sm-block">
    <ul class="list-group list-group-horizontal-sm text-center">
      <li class="list-group-item col-12 col-sm-1 d-flex align-items-center justify-content-center">
        <h6 class="mb-0">@lang('content.admin-list-title1')</h6>
      </li>
      <li class="list-group-item col-12 col-sm-4 d-flex align-items-center justify-content-center">
        <h6 class="mb-0">@lang('content.admin-list-title2')</h6>
      </li>
      <li class="list-group-item col-12 col-sm-2 d-flex align-items-center justify-content-center">
        <h6 class="mb-0">@lang('content.admin-list-title3')</h6>
      </li>
      <li class="list-group-item col-12 col-sm-2 d-flex align-items-center justify-content-center">
        <h6 class="mb-0">@lang('content.admin-list-title4')</h6>
      </li>
      <li class="list-group-item col-12 col-sm-2 d-flex d-sm-none d-md-flex align-items-center justify-content-center">
        <h6 class="mb-0">@lang('content.admin-list-title5')</h6>
      </li>
    </ul>
  </div>

  <ul id="solicitudesList" class="p-1">

  @foreach ($solicitudes as $solicitude)
  <li class="list-group-item col-12 mb-2">
    <ul class="list-group list-group-horizontal-sm text-center">
      <li class="list-group-item col-12 col-sm-1 d-flex align-items-center justify-content-center" lang="@lang('content.admin-list-title1')">
        <p class="mb-0 col-6 col-sm-12 text-break">{{$solicitude->id}}</p>
      </li>
      <li class="list-group-item col-12 col-sm-4 d-flex align-items-center justify-content-center" lang="@lang('content.admin-list-title2')">
        <p class="mb-0 col-6 col-sm-12 text-break">{{$solicitude->form}}</p>
      </li>
      <li class="list-group-item col-12 col-sm-2 d-flex align-items-center justify-content-center" lang="@lang('content.admin-list-title3')">
        <p class="mb-0 col-6 col-sm-12 text-break">{{$solicitude->mode}}</p>
      </li>
      <li class="list-group-item col-12 col-sm-2 d-flex align-items-center justify-content-center" lang="@lang('content.admin-list-title4')">
        <p class="mb-0 col-6 col-sm-12 text-break">{{$solicitude->submode}}</p>
      </li>
      <li class="list-group-item col-12 col-sm-2 d-flex d-sm-none d-md-flex align-items-center justify-content-center" lang="@lang('content.admin-list-title5')">
        <p class="mb-0 col-6 col-sm-12 text-break">{{$solicitude->created_at}}</p>
      </li>
      <li class="list-group-item col-12 col-sm-3 col-md-1 d-flex flex-md-column align-items-center justify-content-center">
        <form action="{{ route('search') }}" method="GET">
          @csrf
          <input type="hidden" name="searchID" value="{{$solicitude->id}}">
          <button type="submit" class="btn btn-info px-2 py-1 m-1 hoverUp">
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