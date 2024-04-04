@extends('layouts.app')

@section('title', 'projects')

@section('content')

    <section>
        <div class="container">
            <h1>Edit project</h1>
            <div class="text-center">
                <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mb-3">torna alla lista</a>
                <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary mb-3">torna ai dettagli</a>
            </div>

            <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                @csrf
                @method('PATCH')
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

                <button class="btn btn-success mt-3">Inserisci</button>
            </form>
        </div>
    </section>

@endsection
