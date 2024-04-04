@extends('layouts.app')

@section('title', 'projects')

@section('content')

    <section>
        <div class="container">
            <h1 class="text-center">New Project</h1>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mb-3">Return to the list</a>
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="row g-2">
                    <div class="col-6">
                        <label class="form-lable" for="title">Title</label>
                        <input class="form-control" type="text" name="title" id="title" />
                    </div>
                    <div class="col-6">
                        <label class="form-lable" for="author">Author</label>
                        <input class="form-control" type="text" name="author" id="author" />
                    </div>
                    <div class="col-12">
                        <label class="form-lable" for="description">Description</label>
                        <textarea class="form-control" name="description" rows="5" id="description"></textarea>
                    </div>

                </div>

                <button class="btn btn-success mt-3">Insert</button>
            </form>
        </div>
    </section>

@endsection
