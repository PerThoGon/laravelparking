@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <h4>Historique des reservations</h4>
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
            <br>

            <div class="container">
                <br>
                <table cellpadding="2" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th width="33%">
                                Date
                            </th>
                            <th width="33%">
                                Place
                            </th>
                        </tr>
                    </thead>
                    @forelse($reservations as $reservation)
                    <tbody align="center">
                        <tr>
                            <td>
                                {{ $reservation->created_at }}
                            </td>
                            <td>
                                {{ $reservation->libelle }}
                            </td>
                        </tr>
                        </tbody>
                        @empty
                            <span>Aucune place n'a été crée</span>
                        @endforelse               
                    </table>
            </div>
                <ul class="pagination justify-content-center mb-4">
            </ul>               
@endsection