@extends('layouts.master')

@section('content')
    <div class="card-header">
                <h3 class="card-title">Buat Artikel</h3>
              </div>
              <form action="/artikel" method="POST">
                <div class="card-body">
                @csrf
                  <div class="form-group">
                    <label for="judul">judul:</label>
                    <input type="text" class="form-control" name="judul" placeholder="Enter judul" id="judul">
                  </div>
                
                  <div class="form-group">
                    <label for="Isi">Isi:</label>
                    <input type="text" class="form-control" name="isi" placeholder="Enter isi" id="isi">
                  </div>
                  
        
                
                  <div class="form-group">
                    <label for="slug">slug:</label>
                    <input type="text" class="form-control" name="slug" placeholder="Enter isi" id="isi">
                  </div>
                  
                  <div class="form-group">
                    <label for="tag">Tag:</label>
                    <input type="text" class="form-control" name="tag" placeholder="Enter tag" id="tag">
                  </div>
                 
                 
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </form>
@endsection