@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-primary" href="{{route('properties.index')}}">Back to list</a>
    <form action="{{route('properties.update', $property)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="code" class="form-label">Code</label>
            <input
                type="text"
                class="form-control"
                name="code"
                id="code"
                aria-describedby="codeHelper"
                placeholder="property code"
                value="{{$property->code}}"
            />
            <small id="codeHelper" class="form-text text-muted">Type a code for your property</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input
                type="text"
                class="form-control"
                name="description"
                id="description"
                aria-describedby="descriptionHelper"
                placeholder="property description"
                value="{{$property->description}}"
            />
            <small id="descriptionHelper" class="form-text text-muted">Type a description for your property</small>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input
                type="text"
                class="form-control"
                name="img"
                id="img"
                aria-describedby="imgHelper"
                placeholder="property img"
                value="{{$property->img}}"
            />
            <small id="imgHelper" class="form-text text-muted">Link an image for your property</small>

            <button
                type="submit"
                class="btn btn-primary d-block"
            >
                Update
            </button>
            
        </div>
        

    </form>
</div>

@endsection