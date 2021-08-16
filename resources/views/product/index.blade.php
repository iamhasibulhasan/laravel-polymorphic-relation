@extends('student.layouts.app')

@section('main')
    <div class="wrap-table">
        <a href="#add_student" data-toggle="modal" class="btn btn-warning btn-sm">Add Product</a>
        <br>
        <br>
        <div class="card shadow">
            <div class="card-body">
                <h2>All Products</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_data as $data)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->price }}</td>
                            <td>
                                @foreach($data->image as $photo)
                                    <img src="photos/{{ $photo->url }}" alt="">
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="#">View</a>
                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{--Add student modal--}}
<div id="add_student" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2>Add Products</h2>
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="photo[]" multiple>
                    </div>
                    <input type="submit" class="btn btn-primary btn-sm btn-block">
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
