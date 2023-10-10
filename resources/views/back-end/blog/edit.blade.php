@extends('back-end.master')

@section('content')

    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded bg-cover">
                        <h6 class="mb-0 text-uppercase">Update Blog</h6>
                        <hr/>
                        <form action="{{route('blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data" class="row g-3">
                            @csrf
                            @method('PUT')
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">select Option</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $blog->category_id ? 'selected' : ' '}}>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="auth_name" value="{{$blog->auth_name}}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="descrip" class="form-control">{{$blog->descrip}}</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{asset($blog->image)}}" alt="" style="height: 50px; width: 50px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" value="{{$blog->date}}">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary m-1">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
