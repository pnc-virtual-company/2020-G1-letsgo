@include('layouts.navbar')
@extends('layouts.main')

@section('content')

<div class="container">
    {{-- button search --}}
    <div class="form-group has-search mt-4">
        <span class="fa fa-search form-control-feedback"></span>
        <input class="form-control" id="search" type="text" placeholder="Search..">
    </div>
    <h3 class="text-center"><b class="text-success">C</b>ategories</h3>
    <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <button class="btn btn-warning text-light" data-toggle="modal" data-target="#addCategory">Create</button>
        </div>
        <!-- Form Add Category -->
        <div class="modal" id="addCategory">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{route('categories.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <h3 class="mb-4"><b>Create Category</b></h3>
                        <input type="text" name="category" class="form-control mb-4 capitalize" placeholder="Category name" required>
                        <button type="submit" class="btn btn-warning float-right text-light ml-2">CREATE</button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">DISCARD</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    {{-- Table Categories --}}
    <div class="table-responsive">
        <table class="table table-hover mt-3">
        @foreach($categories as $category)
        <!-- {{-- View  Categories List --}} -->
            <tbody id="mydata">
                <tr>
                   
                    <td class=" text-info action">{{$category->name}}</td>
                    <td class="action_hidden">
                        <a href="{{route('categories.edit',$category->id)}}" class="text-pimary" data-toggle="modal" data-target="#editCategory{{$category->id}}"><span class="material-icons">edit</span></a>
                        <a href="{{route('categories.destroy',$category->id)}}" class="text-danger" data-toggle="modal" data-target="#removeCategory{{$category->id}}"><span class="material-icons text-danger">delete</span></a>
                        @method('DELETE')
                    </td>

            <!-- Form Update Category -->
                <div class="modal" id="editCategory{{$category->id}}">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="mb-4"><b>Update Category</b></h3>
                            <form action="{{route('categories.update',$category->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" class="form-control mb-4" placeholder="Category name" value="{{$category->name}}" name="category">
                                <button type="submit" class="btn btn-warning float-right text-light ml-2">UPDATE</button>
                                <button class="btn btn-danger float-right" data-dismiss="modal">DISCARD</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Form Remove Category -->
                <div class="modal" id="removeCategory{{$category->id}}">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <h3 class="mb-4"><b>Remove Category</b></h3>
                                <p>Are you sure you want to delete the category?</p>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                                <button type="submit" class="btn btn-warning float-right text-light ml-2">OK</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

