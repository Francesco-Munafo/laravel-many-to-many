@extends('layouts.admin')

@section('content')
    <div class="container py-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="text-muted pb-4">&#128898; Create new Technology</h1>

        <form action="{{ route('admin.technologies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Technology name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    id="{{ $technology->id }}" aria-describedby="helpName" placeholder="Insert a technology name"
                    value="{{ old('name') }}">
            </div>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror



            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
@endsection
