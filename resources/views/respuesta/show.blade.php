@extends('layouts.app_principal')

@section('template_title')
    {{ $respuesta->name ?? "{{ __('Show') Respuesta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Respuesta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('respuestas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Respuesta:</strong>
                            {{ $respuesta->respuesta }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            {{ $respuesta->pregunta->pregunta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
