@extends('back-end.master')

@section('content')

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">Add User</h6>
                        <hr/>
                        <form action="{{route('users.store')}}" method="post" class="row g-3">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">User Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">E-mail</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="col-12 m-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Save Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
