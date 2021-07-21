<div class="form-group row">
    <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

    <div class="col-md-6">
        <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" >

        @error('telefono')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

    <div class="col-md-6">
        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" >

        @error('direccion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

    <div class="col-md-6">
        <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror" name="pais" value="{{ old('pais') }}" required autocomplete="pais" autofocus>

        @error('pais')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="profesion" class="col-md-4 col-form-label text-md-right">{{ __('Profesion') }}</label>

    <div class="col-md-6">
        <input id="profesion" type="text" class="form-control @error('profesion') is-invalid @enderror" name="profesion" value="{{ old('profesion') }}" required autocomplete="profesion" autofocus>

        @error('profesion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="sobre_mi" class="col-md-4 col-form-label text-md-right">{{ __('Sobre mi') }}</label>

    <div class="col-md-6">
        <input id="sobre_mi" type="text" class="form-control @error('sobre_mi') is-invalid @enderror" name="sobre_mi" value="{{ old('sobre_mi') }}" required autocomplete="sobre_mi" autofocus>

        @error('sobre_mi')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>