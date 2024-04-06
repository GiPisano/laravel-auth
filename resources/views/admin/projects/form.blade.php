@extends('layouts.app')

@section('title', (empty($project->id) ? 'Add New' : 'Edit') . ' Project')

@section('content')

    <section>
        <div class="container">
            <h1>{{ (empty($project->id) ? 'Add New' : 'Edit') . ' Project' }}</h1>
            <div class="text-center">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mb-3">Return to the list</a>
            </div>

            <form
                action="{{ empty($project->id) ? route('admin.projects.store') : route('admin.projects.update', $project) }}"
                method="POST">
                @csrf
                @if (!empty($project->id))
                    @method('PATCH')
                @endif
                <div class="row g-2">
                    <div class="col-4">
                        <label class="form-lable" for="title">TITLE</label>
                        <input class="form-control" value="{{ $project->title }}" type="text" name="title"
                            id="title" />
                    </div>
                    <div class="col-4">
                        <label class="form-lable" for="author">Author</label>
                        <input class="form-control" value="{{ $project->author }}" type="text" name="author"
                            id="author" />
                    </div>
                    <div class="col-12">
                        <label class="form-lable" for="description">DESCRITION</label>
                        <textarea class="form-control" name="description" rows="5" id="description">{{ $project->description }}</textarea>
                    </div>
                </div>

                <button class="btn btn-success mt-3">{{ (empty($project->id) ? 'Save' : 'Edit') . ' Project' }}</button>
            </form>
        </div>
    </section>

@endsection
