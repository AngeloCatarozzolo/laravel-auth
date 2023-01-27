@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>
    <a href="{{route('admin.project.create')}}" class="btn btn-primary">Crea Progetto</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{$project->id}}</td>
                <td>{{$project->name}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <a href="{{route('admin.project.show', $project)}}" class="btn btn-success">Dettagli</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
@endsection

