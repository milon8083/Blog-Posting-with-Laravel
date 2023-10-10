@extends('back-end.master')

@section('content')

    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Manage User</h6>
                        <hr/>
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>
                                        <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-danger btn-sm float-start m-1" onclick="return confirm('Are you sure Delete this?')">Delete</button>
                                            </div>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
