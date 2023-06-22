@extends('layouts.app')
@section('content')

<main class="index-main float-end">
    <div class="title">
        <h2>Elenco progetti</h2>
    </div>

    <table class="table table-hover w-100">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th style="min-width: 130px" scope="col">Date</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)

                <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->creation_date}}</td>
                    <td>
                        <div class="btn d-flex">
                            <button type="button" class="btn btn-primary"><a href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye"></i></a></button>
                            <button type="button" class="btn btn-secondary"><i class="fa-solid fa-pen"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                @endforeach

        </tbody>
    </table>
</main>

@endsection
