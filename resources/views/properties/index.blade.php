@extends('layouts.app')

@section('content')
<h1>Proprietà</h1>
<a class="btn btn-primary" href="{{route('properties.create')}}">New property</a>
<div class="container">
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">code</th>
                    <th scope="col">description</th>
                    <th scope="col">img</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($properties as $property)
                    
                <tr class="">
                    <td scope="row">{{$property->id}}</td>
                    <td>{{$property->code}}</td>
                    <td>{{$property->description}}</td>
                    <td>{{$property->img}}</td>
                    <td class="d-flex gap-1">
                        <a class="btn btn-sm btn-primary" href="{{route('properties.show', $property)}}">View</a>
                        <a class="btn btn-sm btn-primary" href="{{route('properties.edit', $property)}}">Edit</a>

                        <!-- Modal trigger button -->
                        <button
                            type="button"
                            class="btn btn-sm btn-danger"
                            data-bs-toggle="modal"
                            data-bs-target="#modalId-{{$property->id}}"
                        >
                            Delete
                        </button>
                        
                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div
                            class="modal fade"
                            id="modalId-{{$property->id}}"
                            tabindex="-1"
                            data-bs-backdrop="static"
                            data-bs-keyboard="false"
                            
                            role="dialog"
                            aria-labelledby="modalTitle-{{$property->id}}"
                            aria-hidden="true"
                        >
                            <div
                                class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                role="document"
                            >
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle-{{$property->id}}">
                                            Are you sure to delete property {{$property->code}}?
                                        </h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <div class="modal-body">
                                        Tre process cannot be reverted.
                                    </div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary btn-sm"
                                            data-bs-dismiss="modal"
                                        >
                                            Cancel
                                        </button>
                                        <form action="{{route('properties.destroy', $property)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="btn btn-sm btn-danger"
                                            >
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                @empty

                <tr class="">
                    <td scope="row" colspan="5">No properties</td>
                </tr>
                    
                @endforelse
            </tbody>
        </table>
    </div>
    
</div>
@endsection