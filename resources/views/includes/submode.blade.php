<ul id="submode" class="row g-3 {{$submodeShow}} justify-content-center list-unstyled">
    <h2 class="text-center my-3">@lang('content.submode-title')</h2>

    <li class="col-12 mb-2 position-relative">
      <label for="submodeSelect1" class="form-label">
        @lang('content.submode-submodeSelect1-label')*
      </label>
      <select class="form-select" name="submodeSelect1" id="submodeSelect1" required>
        <option value=""></option>
        <option value="1" @if (isset($solicitude) && $solicitude->submodeSelect1 == 1) selected @endif>
          @lang('content.submode-submodeSelect1-option1')
        </option>
        <option value="2" @if (isset($solicitude) && $solicitude->submodeSelect1 == 2) selected @endif>
          @lang('content.submode-submodeSelect1-option2')
        </option>
      </select>

      <div class="invalid-feedback">
        @lang('content.submode-submodeSelect1-invalid')
      </div>
    </li>

    <li id="submodePart1" class="row g-2 hidden">

      <div class="col-12 mb-2 position-relative">
        <label for="submodePart1Input1">
          <i class="bi bi-1-circle"></i> 
          @lang('content.submode-submodePart1Input1-label')*
        </label>
        <input type="text" name="submodePart1Input1" class="form-control p-3" id="submodePart1Input1" placeholder="@lang('content.submode-submodePart1Input1-placeholder')" value="@if (isset($solicitude)) {{$solicitude->submodePart1Input1}} @endif" required>
        
        <div class="invalid-feedback">
          @lang('content.submode-submodePart1Input1-invalid')
        </div>

        <div id="submodePart1Input1-HelpBlock" class="form-text">
          @lang('content.submode-submodePart1Input1-HelpBlock')
        </div>
      </div>

    </li>

    <li class="col-12 d-flex justify-content-center justify-content-sm-end">

      <button type="button" class="btn btn-secondary mx-2 previous">
        @lang('content.button-previous')
      </button>
      
      <button type="button" class="btn btn-primary next">
        @lang('content.button-next')
      </button>

    </li>
  </ul>