@extends('layouts.app',['title'=>'Nuevo Producto'])
@section('breadcrumbs', Breadcrumbs::render('nuevoProducto'))
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nuevo producto
                </div>

                <div class="card-body">
                    <form action="{{ route('guardarProducto') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if (count($categorias)>0)
                            <label for="categoria" class="mb-0">Selecione una categoría</label>
                            <select class="selectpicker show-tick" data-live-search="true" data-width="100%" name="categoria" id="categoria" title="Selecione una categoría">
                                
                                @foreach ($categorias as $cat)
                                    <option value="{{ $cat->id }}" {{ old('categoria')==$cat->id?'selected':'' }} >{{ $cat->nombre }}</option>
                                @endforeach
                            </select>

                        @else
                            <div class="alert alert-dark" role="alert">
                                <strong>No existe categorías</strong>
                            </div>
                        @endif

                        <div class="md-form md-outline my-1">
                            <input type="text" id="codigo" name="codigo" class="form-control @error('codigo') is-invalid @enderror " value="{{ old('codigo') }}" required>
                            <label for="codigo">Código<i class="text-danger">*</i></label>
                            @error('codigo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}"  required  type="text">
                                    <label for="nombre">Nombre<i class="text-danger">*</i></label>
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="cantidad" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad') }}" type="text" required>
                                    <label for="cantidad">Cantidad<i class="text-danger">*</i></label>
                                    @error('cantidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="precio_compra" name="precio_compra" class="form-control @error('precio_compra') is-invalid @enderror" value="{{ old('precio_compra') }}"  required  type="text">
                                    <label for="precio_compra">Precio de compra<i class="text-danger">*</i></label>
                                    @error('precio_compra')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="precio_venta" name="precio_venta" class="form-control @error('precio_venta') is-invalid @enderror" value="{{ old('precio_venta') }}" required type="text">
                                    <label for="precio_venta">Precio de venta<i class="text-danger">*</i></label>
                                    @error('precio_venta')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="talla" name="talla" class="form-control @error('talla') is-invalid @enderror" value="{{ old('talla') }}"  required  type="text">
                                    <label for="talla">Tamaño<i class="text-danger">*</i></label>
                                    @error('talla')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <input id="color" name="color" class="form-control @error('color') is-invalid @enderror" value="{{ old('color') }}" required type="text">
                                    <label for="color">Color<i class="text-danger">*</i></label>
                                    @error('color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-1">
                                    <textarea id="descripcion" name="descripcion" class="md-textarea form-control @error('descripcion') is-invalid @enderror" required>{{ old('descripcion') }}</textarea>
                                    <label for="descripcion">Descripcion<i class="text-danger">*</i></label>
                                    @error('descripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mt-1">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="foto" aria-describedby="foto" name="foto">
                                      <label class="custom-file-label" for="foto">Selecione foto</label>
                                    </div>
                                  </div>
                            </div>
                        </div>



                        <!-- Sign up button -->
                        <button class="btn btn-primary my-2 btn-block" type="submit">Guardar</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('linksCabeza')
<link rel="stylesheet" href="{{ asset('js/bootstrap-select-1.13.9/dist/css/bootstrap-select.min.css') }}">
<script src="{{ asset('js/bootstrap-select-1.13.9/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select-1.13.9/dist/js/i18n/defaults-es_ES.min.js') }}"></script>

@endpush

@prepend('linksPie')
    <script>
    $('#almacen').addClass('active');
    $('#productos').addClass('active');
    </script>
@endprepend
@endsection
