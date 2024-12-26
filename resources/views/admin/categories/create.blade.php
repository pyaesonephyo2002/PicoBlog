@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Create Category</h1>
        <a href="{{route('backend.categories.index')}}" class="btn btn-danger float-end">Cancel</a>
    </div>

    <!-- Breadcrumb navigation -->
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{route('backend.categories.index')}}">Categories</a></li>
        <li class="breadcrumb-item active">Create Post</li>
    </ol>

    <!-- Form Card -->
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Create Category 
        </div>
        <div class="card-body">
            <form method="post" action="{{route('backend.categories.store')}}" enctype="multipart/form-data">
                @csrf
                
                <!-- Name -->
                <div class="mb-3">
                    <label for="title" class="form-label">Name:</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
