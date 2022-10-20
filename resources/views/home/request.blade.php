@extends('app')

@section('content')

<script>
  var d1 = '{{ $d1 }}';
  var d2 = '{{ $d2 }}';
  var d3 = '{{ $d3 }}';
</script>

<h1 class="text-center my-3">Formulario {{ $form }}</h1>

<form class="row g-3 needs-validation" novalidate>
  @csrf

  <div id="data1" class="row g-3 {{ $d1 }}">
    <div class="col-12  mb-2">
      <label for="input1" class="form-label">SELECT</label>
      <select class="form-select" required>
        <option value=""></option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>

      <div class="invalid-feedback">
        Please choose a username.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-12  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="text" required>
        <label for="floatingInput"><i class="bi bi-1-circle"></i> Label</label>

        <div class="invalid-feedback">
          Please choose a username.
        </div>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div id="floatingInputHelpBlock" class="form-text">
        Text.
      </div>
    </div>

    <div class="col-4  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="text">
        <label for="floatingInput">Label</label>
      </div>
    </div>

    <div class="col-4  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="text">
        <label for="floatingInput">Label</label>
      </div>
    </div>

    <div class="col-4  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="text">
        <label for="floatingInput">Label</label>
      </div>
    </div>

    <div class="col-12 d-flex flex-row-reverse">
      <button type="button" class="btn btn-primary next">Siguiente</button>
    </div>
  </div>

  <div id="data2" class="row g-3 {{ $d2 }}">
    <div class="col-12  mb-2">
      <label for="input1" class="form-label">SELECT</label>
      <select class="form-select" required>
        <option value=""></option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>

      <div class="invalid-feedback">
        Please choose a username.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-12  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="text" required>
        <label for="floatingInput"><i class="bi bi-1-circle"></i> Label</label>

        <div class="invalid-feedback">
          Please choose a username.
        </div>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div id="floatingInputHelpBlock" class="form-text">
        Text.
      </div>
    </div>

    <div class="col-12 d-flex justify-content-between">
      <button type="button" class="btn btn-secondary previous">Anterior</button>
      <button type="button" class="btn btn-primary next">Siguiente</button>
    </div>
  </div>

  <div id="data3" class="row g-3 {{ $d3 }}">
    <div class="col-12  mb-2">
      <label for="input1" class="form-label">SELECT</label>
      <select class="form-select" required>
        <option value=""></option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>

      <div class="invalid-feedback">
        Please choose a username.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-12  mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="text" required>
        <label for="floatingInput"><i class="bi bi-1-circle"></i> Label</label>

        <div class="invalid-feedback">
          Please choose a username.
        </div>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div id="floatingInputHelpBlock" class="form-text">
        Text.
      </div>
    </div>

    <div class="col-12 d-flex justify-content-between">
      <button type="button" class="btn btn-secondary previous">Anterior</button>
      <button type="submit" class="btn btn-primary next">Submit</button>
    </div>

  </div>

  <div class="col-12 d-flex justify-content-center">
    <a href="/" class="btn btn-dark">Cancelar</a>
  </div>
      

</form>
@endsection

