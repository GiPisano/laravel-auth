@extends('layouts.app')

@section('title', 'projects')

@section('content')

    <div class="container">
        <h1 class="my-4 text-center">{{ $project->title }}</h1>
        <div class="text-center">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">New Project</a>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mb-3">Return to the list</a>
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary mb-3">Edit project</a>
        </div>
        <div class="row g-5">
            <div class="col-12">
                <h2 class="h4">Description</h2>
                <p>{{ $project->description }}</p>

                <div class="row">
                    <div class="col-12">
                        <h2 class="h4">Author</h2>
                        <p>{{ $project->author }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
