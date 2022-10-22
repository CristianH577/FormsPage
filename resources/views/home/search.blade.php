@extends('app')

@section('content')

<form action="{{ route('search')}}" method="GET" name="formSearch" id="formSearch">
  @csrf

  <div id="serchSolicitude" class="row row-cols-1 g-1 justify-content-center mt-3">

    <div class="mb-3">
      <label for="searchID" class="form-label">Buscar Solicitud</label>
      <input type="number" class="form-control" name="searchID" id="searchID" value="{{$id}}">
      <div id="searchIDHelp" class="form-text">Ingrese el numero de solicitud.</div>
    </div>

    <div class="d-flex justify-content-center justify-content-sm-end">
      <button type="button" class="btn btn-secondary mx-2 previous">Cancelar</button>
      <button type="submit" class="btn btn-primary next">Buscar</button>
    </div>

  </div>
</form>

@if ($id == "")

@elseif ($solicitude === null)
<div class="alert alert-danger mt-5">No se encontraron resultados.</div>
@elseif ($solicitude !== null)
<section>
  <h1 class="text-center my-3">Solicitud {{$id}} - Formulario {{$solicitude->form}}</h1>

  @if ($solicitude->mode == 1)
  <ul id="data1" class="row g-3 justify-content-center list-unstyled">
    <h2 class="text-center my-3">Modo</h2>

    <li class="col-12 mb-2 position-relative">
      <label for="data1Select1" class="form-label">SELECT*</label>
      <select disabled  class="form-select" name="data1Select1" id="data1Select1" required>
        <option value=""></option>
        <option @if ($solicitude->data1Select1 == 1) selected @endif >One</option>
        <option @if ($solicitude->data1Select1 == 2) selected @endif >Two</option>
      </select>

      <div class="invalid-feedback">
        Selecciona.
      </div>
    </li>

    <li id="data1Part1" class="row g-2 hidden">
      <div class="col-12 mb-2 position-relative">
        <label for="data1Part1Input1"><i class="bi bi-1-circle"></i> Label*</label>
        <input disabled value="{{$solicitude->data1Part1Input1}}"  type="text" name="data1Part1Input1" class="form-control p-3" id="data1Part1Input1" placeholder="Label" required>
      </div>

      <div class="col-12 mb-2">
        <label for="data1Part1Date1Day">Fecha</label>
        <input disabled value="{{$solicitude->data1Part1Date1}}"  type="text" name="data1Part1Date1" class="form-control p-3" id="data1Part1Date1" placeholder="text">
      </div>
    </li>
  </ul>
  @endif

  @if ($solicitude->submode == 1)
  <ul id="data2" class="row g-3 justify-content-center list-unstyled">
    <h2 class="text-center my-3">Submodo</h2>

    <li class="col-12  mb-2">
      <label for="data2Select1" class="form-label">SELECT*</label>
      <select disabled  class="form-select" name="data2Select1" id="data2Select1" required>
        <option value=""></option>
        <option @if ($solicitude->data2Select1 == 1) selected @endif >One</option>
        <option @if ($solicitude->data2Select1 == 2) selected @endif >Two</option>
      </select>

      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </li>

    <li id="data2Part1" class="row g-2 hidden">
      <div class="col-12 mb-2">
        <label for="data2Part1Input1"><i class="bi bi-1-circle"></i> Label*</label>
        <input disabled value="{{$solicitude->data2Part1Input1}}"  type="text" name="data2Part1Input1" class="form-control p-3" id="data2Part1Input1" placeholder="Label" required>

        <div class="invalid-feedback">
          Seleccione.
        </div>

        <div id="data2Part1Input1-HelpBlock" class="form-text">
          Text.
        </div>
      </div>

      <div class="col-12 mb-2">
        <label for="data2Part1Date1">Fecha</label>
        <input disabled value="{{$solicitude->data2Part1Date1}}"  type="text" name="data2Part1Date1" class="form-control p-3" id="data2Part1Date1" placeholder="text">
      </div>
    </li>
  </ul>
  @endif

  <ul id="data3" class="row g-3 justify-content-center list-unstyled">
    <h2 class="text-center my-3">Solicitud</h2>

    <li class="col-12  mb-2">
      <div class="form-floating">
        <input disabled value="{{$solicitude->data3Input1}}"  type="text" class="form-control" name="data3Input1" id="data3Input1" placeholder="text" required>
        <label for="data3Input1"><i class="bi bi-1-circle"></i> Label*</label>

        <div class="invalid-feedback">
          Complete.
        </div>
      </div>
    </li>
    
    <li class="col-12  mb-2">
      <label for="data3Select1" class="form-label">Select*</label>
      <select disabled  class="form-select" name="data3Select1" id="data3Select1" required>
        <option value=""></option>
        <option @if ($solicitude->data3Select1 == 1) selected @endif >One</option>
        <option @if ($solicitude->data3Select1 == 2) selected @endif >Two</option>
        <option @if ($solicitude->data3Select1 == 3) selected @endif >Three</option>
      </select>
    </li>

    <li class="col-12  mb-2">
      <div class="form-floating">
        <input disabled value="{{$solicitude->data3Input2}}"  type="text" class="form-control" name="data3Input2" id="data3Input2" placeholder="text" required>
        <label for="data3Input2"><i class="bi bi-1-circle"></i> Label*</label>

        <div class="invalid-feedback">
          Complete.
        </div>
      </div>
    </li>
  </ul>
</section>
@endif

@endsection