@extends('app')

@section('content')

<script>
  var modes = [];
  modes.push("{{$parameters['mode']}}", "{{$parameters['submode']}}", 1);
</script>

<h1 class="text-center my-3">@lang('content.request-title') {{ $parameters['form'] }}</h1>

<form action="{{ route('send') }}" method="POST" id="form-request" class="row g-3 d-flex justify-content-center needs-validation" novalidate>
  @csrf

  @if (count($errors) > 0)
    <div class="alert alert-danger">
    	<p>@lang('content.request-errors'):</p>
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <input type="hidden" name="mode" value="{{ $parameters['mode'] }}" required>
  <input type="hidden" name="submode" value="{{ $parameters['submode'] }}" required>
  <input type="hidden" name="form" value="{{ $parameters['form'] }}" required>

  @if ($parameters['mode'] == 1)
    @include('includes.mode', ['modeShow' => $show['mode']])
  @endif

  @if ($parameters['submode'] == 1)
    @include('includes.submode', ['submodeShow' => $show['submode']])
  @endif

  @include('includes.requestForm', ['rqFormShow' => $show['form']])

  <div class="col-12 d-flex justify-content-center">
    <a href="/" class="btn btn-dark">
      @lang('content.button-cancel') 
    </a>
  </div>
      
</form>

<script src="js/request.js"></script>
@endsection