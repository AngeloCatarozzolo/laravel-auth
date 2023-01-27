@extends('layouts.admin')

@section('content')
    <h1>Crea Progetto</h1>

    <div class="mt-4">
        <form action="{{route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="customer" name="customer" value="{{old('customer')}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="10">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="cover_image" name="cover_immage" value="{{old('cover_image')}}">
            </div>
                <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection