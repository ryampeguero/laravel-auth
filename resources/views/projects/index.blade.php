@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Projects</h1>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Testo</th>
                            <th scope="col">slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projectList as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->slug }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
