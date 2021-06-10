@extends('admin.template.admin')

@section('title')
    List Admin
@endsection

@section('head')
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 3px 8px;
        }

    </style>
@endsection

@section('page-title')
    List Admin
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>username/email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->name }}</td>
                    <td>{{ $a->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        document.querySelector('#admin-list').classList.add('active');

    </script>
@endsection
