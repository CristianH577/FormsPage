@extends('app')

@section('content')

<script>
  var mode = '{{ $mode }}'; submode = '{{ $submode }}';
</script>

<h1 class="text-center my-3">Formulario {{ $form }}</h1>

<form action="{{ route('send') }}" method="POST" id="form-request" class="row g-3 d-flex justify-content-center needs-validation" novalidate>
  @csrf

  @error('data1Select1')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <input type="hidden" name="form" value="{{ $form }}">
  <input type="hidden" name="mode" value="{{ $mode }}">
  <input type="hidden" name="submode" value="{{ $submode }}">

  <ul id="data1" class="row g-3 {{$d1}} justify-content-center list-unstyled">
    <h2 class="text-center my-3">Modo</h2>

    <li class="col-12 mb-2 position-relative">
      <label for="data1Select1" class="form-label">SELECT*</label>
      <select class="form-select" name="data1Select1" id="data1Select1" required>
        <option value=""></option>
        <option value="1">One</option>
        <option value="2">Two</option>
      </select>

      <div class="invalid-feedback">
        Selecciona.
      </div>
    </li>

    <li id="data1Part1" class="row g-2 hidden">
      <div class="col-12 mb-2 position-relative">
        <label for="data1Part1Input1"><i class="bi bi-1-circle"></i> Label*</label>
        <input type="text" name="data1Part1Input1" class="form-control p-3" id="data1Part1Input1" placeholder="Label" required>
        
        <div class="invalid-feedback">
          Complete.
        </div>

        <div id="data1Part1Input1-HelpBlock" class="form-text">
          Text.
        </div>
      </div>

      <div class="col-12">
        <label for="">Fecha</label>
      </div>
      <div class="col-12 col-sm-4 mb-2">
        <div class="form-floating">
          <input type="text" name="data1Part1Date1Day" class="form-control" id="data1Part1Date1Day" placeholder="text">
          <label for="data1Part1Date1Day">Day</label>
        </div>
      </div>
      <div class="col-12 col-sm-4 mb-2">
        <div class="form-floating">
          <input type="text" name="data1Part1Date1Month" class="form-control" id="data1Part1Date1Month" placeholder="text">
          <label for="data1Part1Date1Month">Mes</label>
        </div>
      </div>
      <div class="col-12 col-sm-4 mb-2">
        <div class="form-floating">
          <input type="text" name="data1Part1Date1Year" class="form-control" id="data1Part1Date1Year" placeholder="text">
          <label for="data1Part1Date1Year">Año</label>
        </div>
      </div>
    </li>

    <li class="col-12 d-flex justify-content-center justify-content-sm-end">
      <button type="button" class="btn btn-primary next">Siguiente</button>
    </li>
  </ul>

  <ul id="data2" class="row g-3 {{ $d2 }} justify-content-center list-unstyled">
    <h2 class="text-center my-3">Submodo</h2>

    <li class="col-12  mb-2">
      <label for="data2Select1" class="form-label">SELECT*</label>
      <select class="form-select" name="data2Select1" id="data2Select1" required>
        <option value=""></option>
        <option value="1">One</option>
        <option value="2">Two</option>
      </select>

      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </li>

    <li id="data2Part1" class="row g-2 hidden">
      <div class="col-12 mb-2">
        <label for="data2Part1Input1"><i class="bi bi-1-circle"></i> Label*</label>
        <input type="text" name="data2Part1Input1" class="form-control p-3" id="data2Part1Input1" placeholder="Label" required>

        <div class="invalid-feedback">
          Seleccione.
        </div>

        <div id="data2Part1Input1-HelpBlock" class="form-text">
          Text.
        </div>
      </div>

      <div class="col-12">
        <label for="">Fecha</label>
      </div>
      <div class="col-12 col-sm-4 mb-2">
        <div class="form-floating">
          <input type="text" name="data2Part1Date1Day" class="form-control" id="data2Part1Date1Day" placeholder="text">
          <label for="data2Part1Date1Day">Day</label>
        </div>
      </div>
      <div class="col-12 col-sm-4 mb-2">
        <div class="form-floating">
          <input type="text" name="data2Part1Date1Month" class="form-control" id="data2Part1Date1Month" placeholder="text">
          <label for="data2Part1Date1Month">Mes</label>
        </div>
      </div>
      <div class="col-12 col-sm-4 mb-2">
        <div class="form-floating">
          <input type="text" name="data2Part1Date1Year" class="form-control" id="data2Part1Date1Year" placeholder="text">
          <label for="data2Part1Date1Year">Año</label>
        </div>
      </div>
    </li>

    <li class="col-12 d-flex justify-content-center justify-content-sm-end">
      @if ($mode == '1')
      <button type="button" class="btn btn-secondary mx-2 previous">Anterior</button>
      @endif
      <button type="button" class="btn btn-primary next">Siguiente</button>
    </li>
  </ul>

  <ul id="data3" class="row g-3 {{ $d3 }} justify-content-center list-unstyled">
    <h2 class="text-center my-3">Solicitud</h2>

    <li class="col-12  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" name="data3Input1" id="data3Input1" placeholder="text" required>
        <label for="data3Input1"><i class="bi bi-1-circle"></i> Label*</label>

        <div class="invalid-feedback">
          Complete.
        </div>
      </div>
    </li>
    
    <li class="col-12  mb-2">
      <label for="data3Select1" class="form-label">Select*</label>
      <select class="form-select" name="data3Select1" id="data3Select1" required>
        <option value=""></option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </li>

    <li class="col-12  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" name="data3Input2" id="data3Input2" placeholder="text" required>
        <label for="data3Input2"><i class="bi bi-1-circle"></i> Label*</label>

        <div class="invalid-feedback">
          Complete.
        </div>
      </div>
    </li>

    <li class="col-12 d-flex justify-content-end">
      @if ($mode == '1' || $submode == '1')
      <button type="button" class="btn btn-secondary mx-2 previous">Anterior</button>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </li>
  </ul>

  <div class="col-12 d-flex justify-content-center">
    <a href="/" class="btn btn-dark">Cancelar</a>
  </div>
      
</form>

<script src="js/request.js"></script>
@endsection