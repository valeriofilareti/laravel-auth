@extends('layouts.app')
@section('content')

<main class="index-main float-end">

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
                            <button type="button" class="btn btn-primary">x</button>
                            <button type="button" class="btn btn-secondary">x</button>
                            <button type="button" class="btn btn-danger">x</button>
                        </div>
                    </td>
                </tr>

                @endforeach

        </tbody>
    </table>
</main>

@endsection
