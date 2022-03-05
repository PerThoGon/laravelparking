@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <h4>Gestion des salariés</h4>
    </h2>
</div>
@if (session('status'))
<div class="alert alert-success">
    <br>
    <h4 align="center">{{ session('status') }}</h4>
</div>
@endif

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container">
            <a href="{{ url()->previous() }}"><button class="btn btn-secondary btn-sm">&#x21A9 Retour</button></a>
            </div>
            <form action="">
                {!! Form::open() !!}
                    <div class="form-group" align="center">
                        {{ Form::search('search', '', ['placeholder' => 'Rechercher par nom ou email']) }}
                        {{ Form::submit('Rechercher')}}
                    </div>
                {!! Form::close() !!}
                <br>

            <div class="container">
                
                <div class="container" align="center">
                    <a href="{{route('users.create')}}">
                        <i class="fa-solid fa-plus"></i> Ajouter un salarié
                    </a>
                </div>
                <br>
                <table cellpadding="2" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th width="30%">
                                Nom
                            </th>
                            <th width="30%">
                                Prenom
                            </th>
                            <th width="30%">
                                Mail
                            </th>
                            <th width="3%">
                            </th>
                        </tr>
                    </thead>
                    @forelse($salaries as $salarie)
                    <tbody align="center">
                        <tr>
                            <td>
                                {{ $salarie->name }}
                            </td>
                            <td>
                                {{ $salarie->prenom }}
                            </td>
                            <td>                                                
                                {{ $salarie->email }}&#x2800
                            </td>
                            <td>
                                <a href="{{route('users.edit', $salarie->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>                                            
                            </td>
                            <td>
                                <a href="{{route('users.remove', $salarie->id)}}"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-user-large-slash"></i></a>
                            </td>
                        </tr>
                        </tbody>
                        @empty
                            <span>Aucun compte n'a été crée</span>
                        @endforelse
                    </table>
            </div>
                <ul class="pagination justify-content-center mb-4">
            </ul>               
@endsection