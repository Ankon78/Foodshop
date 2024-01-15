@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-secondary mb-3" href="{{ route('sub-category.index') }}"> Back</a>

                <form action="{{ route('sub-category.store') }}" method="POST">
                    @csrf

                    @include('sub_category.form')
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
