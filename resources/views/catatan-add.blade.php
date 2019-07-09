    
@extends('layout')

@section('content')

<section class="catatan">
        <div id="container">
            <div class="row" style="padding: 3% 0 3% 0">
                <div class="col-md-8 offset-md-2">
                <h4 style="text-align:center">TAMBAH CATATAN</h4><br>
                <form action="{{ route('catatan.store') }}" method="POST">
                    @csrf
    
                    <div class="form-group">
                        <div class="form-group">
                            <label for="title">Mata Kuliah</label>
                            <select name="subject_id" id="subject_id" class="form-control">
                                <option selected disabled>-- PILIH MATA KULIAH --</option>
                                @foreach ($subjectAll as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                                @endforeach
                                <option>Basis Data</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="title">Topik</label>
                        <input type="text" class="form-control" name="title" value="{{ old('topic') }}">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
 
                    <div class="form-group">
                        <label for="message">Pesan yang disampaikan</label>
                        <textarea class="form-control" name="message" cols="30" rows="5"></textarea>
                        @error('message')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="avatar">Upload Gambar</label>
                        <input type="file" class="form-control" name="avatar">
                    </div>
                    
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <input type="submit" class="btn btn-primary" value="Tambahkan">
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</section>

@endsection