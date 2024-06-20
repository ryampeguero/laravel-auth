@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Projects</h1>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projectList as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->slug }}</td>
                                <td><a class="btn btn-primary"
                                        href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">Dettagli</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
