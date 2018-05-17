@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Crear un nuevo link</h1>
        </div>
        <form action="/submit" method="post">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    Corrigue los errores.
                </div>
            @endif

            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('title') ? ' has-error':'' }}">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo del link" vaule="{{ old('title') }}">
               @if ($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
               @endif
            </div>
            <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                <label for="url">Url</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Url" value="{{ old('url') }}">
                @if ($errors->has('url'))
                    <span class="help-block">{{ $errors->first('url') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descripcion">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <span class="help-block">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-default">Añadir</button>
        </form>
    </div>
@endsection