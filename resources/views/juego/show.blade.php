@extends('layouts.app')

@section('template_title')
    {{ $juego->name ?? __('Show') . " " . __('Juego') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Juego</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('juegos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $juego->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Anho:</strong>
                                    {{ $juego->anho }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Plataforma:</strong>
                                    @if ($juego->plataforma_id == 1) <!--Esto es para que no aparezca con el id de la plataforma si no con el propio nombre-->
                                        {{"PlayStation 2"}}
                                    @endif
                                    @if ($juego->plataforma_id == 2) <!--Esto es para que no aparezca con el id de la plataforma si no con el propio nombre-->
                                        {{"PlayStation 3"}}
                                    @endif
                                    @if ($juego->plataforma_id == 3) <!--Esto es para que no aparezca con el id de la plataforma si no con el propio nombre-->
                                        {{"PlayStation 4"}}
                                    @endif
                                    @if ($juego->plataforma_id == 4) <!--Esto es para que no aparezca con el id de la plataforma si no con el propio nombre-->
                                        {{"PlayStation 1"}}
                                    @endif
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nota:</strong>
                                    {{ $juego->nota }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
