@extends('master')

@section('title', 'Category-Create-Page')

@section('content')

<div class="row">
    <div class="col-8 m-auto">
        <form action="">
            <div class="mb-3">
                <label for="category-name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="category-name" placeholder="Please provide Category name">
            </div>
            <div class="mb-3">
                <label for="category-slug" class="form-label">Category Slug</label>
                <input type="text" class="form-control" id="category-slug" placeholder="Please provide Category slug">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Active/Inactive
                </label>
              </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>

@endsection
