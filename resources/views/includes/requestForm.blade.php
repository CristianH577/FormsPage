<ul id="rqForm" class="row g-3 {{ $rqFormShow }} justify-content-center list-unstyled">
    <h2 class="text-center my-3">@lang('content.rqForm-title')</h2>

    <li class="col-12 mb-2">
      <div class="form-floating">
        <input type="text" class="form-control" name="rqFormInput1" id="rqFormInput1" placeholder="@lang('content.rqForm-rqFormInput1-placeholder')" value="@if (isset($solicitude)) {{$solicitude->rqFormInput1}} @endif" required>
        <label for="rqFormInput1">
          <i class="bi bi-1-circle"></i> 
          @lang('content.rqForm-rqFormInput1-label')*
        </label>

        <div class="invalid-feedback">
          @lang('content.rqForm-rqFormInput1-invalid')
        </div>
      </div>
    </li>
    
    <li class="col-12  mb-2">
      <label for="rqFormSelect1" class="form-label">
        @lang('content.rqForm-rqFormSelect1-label')*
      </label>
      <select class="form-select" name="rqFormSelect1" id="rqFormSelect1" required>
        <option value=""></option>
        <option value="1" @if (isset($solicitude) && $solicitude->rqFormSelect1 == 1) selected @endif>
          @lang('content.rqForm-rqFormSelect1-option1')
        </option>
        <option value="2" @if (isset($solicitude) && $solicitude->rqFormSelect1 == 2) selected @endif>
          @lang('content.rqForm-rqFormSelect1-option2')
        </option>
        <option value="3" @if (isset($solicitude) && $solicitude->rqFormSelect1 == 3) selected @endif>
          @lang('content.rqForm-rqFormSelect1-option3')
        </option>
      </select>
    </li>

    <li class="col-12">
      <label>
        @lang('content.rqForm-rqFormDate1-label')
      </label>
        
      <div class="row">
        <div class="col-12 col-sm-4 mb-2">
          <div class="form-floating">
            <input type="text" name="rqFormDate1Day" class="form-control" id="rqFormDate1Day" placeholder="@lang('content.rqForm-rqFormDate1Day-placeholder')" value="@if (isset($solicitude)) {{$solicitude->rqFormDate1Day}} @endif">
            <label for="rqFormDate1Day">
              @lang('content.rqForm-rqFormDate1Day-label')
            </label>
          </div>
        </div>

        <div class="col-12 col-sm-4 mb-2">
          <div class="form-floating">
            <input type="text" name="rqFormDate1Month" class="form-control" id="rqFormDate1Month" placeholder="@lang('content.rqForm-rqFormDate1Month-placeholder')" value="@if (isset($solicitude)) {{$solicitude->rqFormDate1Month}} @endif">
            <label for="rqFormDate1Month">
              @lang('content.rqForm-rqFormDate1Month-label')
            </label>
          </div>
        </div>

        <div class="col-12 col-sm-4 mb-2">
          <div class="form-floating">
            <input type="text" name="rqFormDate1Year" class="form-control" id="rqFormDate1Year" placeholder="@lang('content.rqForm-rqFormDate1Year-placeholder')" value="@if (isset($solicitude)) {{$solicitude->rqFormDate1Year}} @endif">
            <label for="rqFormDate1Year">
              @lang('content.rqForm-rqFormDate1Year-label')</label>
          </div>
        </div>
      </div>
    </li>

    <li class="col-12 d-flex justify-content-end">
      <button type="button" class="btn btn-secondary mx-2 previous">
        @lang('content.button-previous')
      </button>

      <button type="submit" class="btn btn-primary">
        @lang('content.button-submit')
      </button>
    </li>
  </ul>