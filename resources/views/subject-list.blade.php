@extends('layout')

@section('content')
@if(session('pesan'))
    <div class="alert alert-succes">
        {{ session('pesan') }}
    </div>
@endif
    {{-- <table class="table table-striped">
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subject as $s)
            <tr>
                <td>{{ $s->name }}</td> 
                <td>
                    <a href="/subject/{{ $s->id }}/subject-edit">
                        <button type="button" class="btn btn-primary btn-sm">
                                Edit
                        </button>
                    </a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Subject
    </button> --}}
    
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Kuliah</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        
                    @foreach ($subject as $s)
                    <form action="{{ route('subject.store', $s->id) }}" method="POST">
                        @csrf
        
                        <div class="form-group">
                            <label for="name">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="name">
                            @error('subject')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
    
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div> --}}

    <section class="catatan">
            <div id="container">
                <div class="row" style="padding: 3% 0 3% 0">
                    <a href="\catatan-add">
                        <button type="submit" class="btn btn-primary btn-sm">Add Catatan</button>
                    </a>
                    <div class="col-md-2 offset-md-2 a">							
                        <div class="topic">
                            <br>
                            <h5>MATA KULIAH</h5>
                            @foreach ($subjectAll as $subAll)
                            <ul class="list-group">
                                <li class="list-group-item">{{ $subAll->name }}</li>
                            </ul>
                            @endforeach
                            <button class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">
                                Tambah Makul
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 b">
                            @foreach ($subject as $s)
                                <div class="card">
                                    <h5 class="card-header">Riacup - KOMSI</h5>
                                    <div class="card-body">
                                        @foreach ($s->notes as $note)
                                            <h5 class="card-title">{{ $s->name}}</h5>
                                        
                                            <ul class="list-group">
                                                <li class="list-group-item">Topik : {{ $note->title }}</li>
                                                <li class="list-group-item">Pesan : {{ $note->message }}</li>
                                            </ul>     
                                        
                                        @endforeach
                                        <a href="#" class="btn btn-light btn-sm">Open</a>
                                    </div>
                                    <div class="card-footer">
                                        Add comment
                                    </div>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </section>
        
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
            
                        <form action="{{ route('subject.store') }}" method="POST">
                            @csrf
            
                            <div class="form-group">
                                <label for="name">Nama Mata Kuiah</label>
                                <input type="text" class="form-control" name="name">
                                @error('subject')
                                    {{ $message }}
                                @enderror
                            </div>
    
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
        
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>

@endsection
