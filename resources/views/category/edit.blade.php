@extends('layouts.app')

@section('content')
<div class="col-2"></div>
<div class="col-6">
<a href="{{ route('category.index') }}" class="btn btn-primary mb-1">BACK</a>
<hr>
<form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('category.form')

    <div class="float-end mt-3">
        <button type="submit" class="btn btn-info ">Submit</button>
      </div>


</form>
</div>
<div class="col-2"></div>

@endsection
