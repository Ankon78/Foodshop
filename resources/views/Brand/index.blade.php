@extends('layouts.app')

@section('content')
    <div class="col-10 ">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-info mb-2 float-end" href="{{ route('brand.create') }}">CREATE BRAND</a>

                <table class="table table-bordered table-striped table-hover" id="myTable">
                    <thead>
                        <td><strong>ID</strong></td>
                        <td><strong>BRAND NAME</strong></td>
                        <td><strong>STATUS</strong></td>
                        <td style="width: 300px"><strong>ACTION</strong></td>
                    </thead>


                    <tbody>
                        @foreach ($brand_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ isset($item) && $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a class="btn btn-primary " href="{{ route('brand.edit', $item->id) }}">UPDATE</a>
                                    <form style="display: inline-block" action="{{ route('brand.destroy', $item->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
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



