@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="margin-bottom: 20px">
            <h1>User List</h1>
            <hr>
        </div>

        <table class="table datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td><a href="/user/{{ $u->id }}">{{ $u->name }}</a></td>
                        <td>{{ $u->email }}</td>
                        <td>
                            <ul>
                                @foreach ($u->posts as $posts)
                                    @foreach ($posts->comments as $c)
                                        <li><a href="/comment/{{ $c->id }}">{{ $c->comment }}</a></li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $('.datatable').DataTable();
    </script>
@endsection