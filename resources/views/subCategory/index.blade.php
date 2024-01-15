@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success mb-2" href="{{ route('subCategory.create') }}"> Create New Sub Category</a>

                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <th><strong>ID</strong></th>
                    <th><strong>CATEGORY</strong></th>
                    <th><strong>SUB CATEGORY</strong></th>
                    <th><strong>ID</strong></th>
                    <th><strong>STATUS</strong></th>
                    <td style="width: 300px"><strong>ACTION</strong></td>
                    </thead>

                    <tbody>
                    @foreach($sub_category_list as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ isset($item->category) ? $item->category->name : '' }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ isset($item) && $item->status == 1 ? 'Active' : 'Inactive'  }}</td>
                            <td>
                                <a href="{{ route('subCategory.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                <form style="display: inline-block;" action="{{ route('subCategory.destroy',  $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
