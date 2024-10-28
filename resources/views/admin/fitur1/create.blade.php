@extends('admin.fitur1.layout')
@section('content')
<div class="bg-light rounded h-100 p-4">
    <h3 class="text-center" style="color: maroon">CREATE CONTENT</h3>
    <form action="{{ route('admin.saving') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="judul">
            <label for="floatingInput">JUDUL</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="isi" style="height: 150px;"></textarea>
            <label for="floatingTextarea">ARTICLE</label>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" id="formFileMultiple"name="gambar" multiple="">
        </div>
        <button class="btn btn-primary w-100 m-2" type="submit">SUBMIT</button>    
    </form>
@endsection