@extends('layouts.app')
@section('css')
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    @endsection
@section('content')
<div class="col-10">
    <p>this is dashboard</p>
    <table class="table table-bordered" id="myTable">
        <thead>
            <td>id</td>
            <td>id</td>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>

    </table>
    </div>

@endsection
@push('scripts')
        <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>
    @endpush
