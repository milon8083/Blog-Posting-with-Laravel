@extends('back-end.master')

@section('content')

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">User Update</h6>
                        <hr/>
                        <form action="{{route('users.update',$user->id)}}" method="post" class="row g-3">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">User Name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">E-mail</label>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control">
                            </div>

                            <div class="col-12 ">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary m-2">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
