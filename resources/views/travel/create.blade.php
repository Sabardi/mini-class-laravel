@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('travel.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="type here">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">location</label>
                <input type="text" name="location" class="form-control" id="location" placeholder="type here">
            </div>
            <div class="mb-3">
                <label for="budget" class="form-label">budget</label>
                <input type="number" name="budget" class="form-control" id="budget" placeholder="type here">
            </div>
            <div class="text-center">
                <button class="btn btn-primary ">Submit</button>
            </div>
        </form>
    </div>
@endsection
