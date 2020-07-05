    @extends('layouts.master')

    @section('content')
        <div class="card-header">
                    <h3 class="card-title">Edit pertanyaan</h3>
                </div>
    <form action="/artikel/{{$artikel->id}}" method="POST">
                    <div class="card-body">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="judul">judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Enter judul" id="judul"value="{{$artikel->judul}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <input type="text" class="form-control" name="isi" placeholder="Enter isi" id="isi"value="{{$artikel->isi}}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Isi</label>
                        <input type="text" class="form-control" name="slug" placeholder="Enter slug" id="slug"value="{{$artikel->slug}}">
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" name="tag" placeholder="Enter tag" id="tag"value="{{$artikel->tag}}">
                    </div>
                
                    
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

    @endsection