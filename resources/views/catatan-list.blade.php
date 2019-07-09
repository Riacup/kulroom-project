@extends('layout')

@section('content')
@if(session('pesan'))
    <div class="alert alert-succes">
        {{ session('pesan') }}
    </div>
@endif
    <div class="col-md-6 b">
        <div class="card">
            @foreach ($notes as $note)
                <h5 class="card-header">Riacup - KOMSI</h5>
                <div class="card-body">
                    @foreach ($s->notes as $note)
                        <h5 class="card-title">{{ $note->name}}</h5>
                    @endforeach
                    <p class="card-text">
                        <ul class="list-group">
                            <li class="list-group-item">{{ $note->title }}</li>
                            <li class="list-group-item">{{ $note->message }}</li>
                        </ul>     
                    </p>
                    <a href="#" class="btn btn-light btn-sm">Open</a>
                </div>
                <div class="card-footer">
                    Add comment
                </div>
            @endforeach
        </div>
        <div class="card">
            <h5 class="card-header">Riacup - KOMSI</h5>
            <div class="card-body">
                <h5 class="card-title">Kalkulus</h5>
                <p class="card-text">
                    BAB : Integral Tentu dan Tak Tentu<br>
                    Keterangan : Berisi deskripsi dari catatan
                </p>
                <a href="#" class="btn btn-light btn-sm">Open</a>
            </div>
            <div class="card-footer">
                Add comment
            </div>
        </div>
    </div>
@endsection
