@extends('back-end.master')

@section('content')

<div class="row">
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Category Form</h6>
                    <hr/>
                   <table class="table table-bordered table-striped table-hover">
                       <thead>
                           <tr>
                               <th>SL</th>
                               <th>Category Name</th>
                               <th>Status</th>
                               <th>Action</th>
                           </tr>
                       </thead>

                      <tbody>
                          @foreach($categories as $category)
                              <tr>
                                  <th>{{$loop->iteration}}</th>
                                  <th>{{$category->category_name}}</th>
                                  <th>{{$category->status == 1 ? 'Active' : 'Inactive'}}</th>
                                  <th>
                                      <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                       @if($category->status == 1)
                                          <a href="{{route('categories.show',$category->id)}}" class="btn btn-warning btn-sm">Inactive</a>
                                      @else
                                          <a href="{{route('categories.show',$category->id)}}" class="btn btn-info btn-sm">Active</a>
                                      @endif

                                      <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                          @csrf
                                          @method('DELETE')

                                          <div class="d-grid">
                                              <button type="submit" class="btn btn-danger btn-sm float-start m-1" onclick="return confirm('Are you sure Delete this?')">Delete</button>
                                          </div>
                                      </form>
{{--                                          <a href="{{route('categories.destroy',$category->id)}}" class="btn btn-danger btn-sm">Delete</a>--}}
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
