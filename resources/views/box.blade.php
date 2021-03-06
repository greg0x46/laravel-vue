@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Dashboard">
            <div class="row">
                <div class="col-4">
                    <box titulo="Artigos" indicador="1.500" cor="#4169E1" icone="far fa-newspaper" url="{{route('artigos.index')}}">

                    </box>
                </div>

                <div class="col-4">
                    <box titulo="Usuários" indicador="8.372" cor="#2E8B57" icone="fas fa-users" url="{{'/'}}">

                    </box>
                </div>

                <div class="col-4">
                    <box titulo="Autores" indicador="73" cor="#191970" icone="fas fa-user" url="{{'/'}}">

                    </box>
                </div>
            </div>
        </painel>
    </pagina>
@endsection
