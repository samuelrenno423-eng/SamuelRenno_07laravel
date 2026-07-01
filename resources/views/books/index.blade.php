@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h1 class="text-center mb-4 text-secondary">Gestione Biblioteca</h1>
        
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <table class="table table-hover table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Autore</th>
                            <th scope="col" class="text-center">Pagine</th>
                            <th scope="col" class="text-center">Anno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td><strong>{{ $book->title }}</strong></td>
                                <td>{{ $book->author }}</td>
                                <td class="text-center">{{ $book->pages ?? 'N/D' }}</td>
                                <td class="text-center">{{ $book->year ?? 'N/D' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
@endsection