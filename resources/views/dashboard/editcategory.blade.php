@extends('layout.dlayout')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">


            <div class="clearfix"></div>

            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                    <h2>Add New Category</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                   @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>   
                   @endif
                   @if (session()->get('success'))
                       <div class="alert alert-success">
                           {{session()->get('success')}}
                       </div>
                   @endif
                <form method="POST"   action="{{route('category.update',$category->id)}}"  class="form-horizontal form-label-left">
                       
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Category Name</label>
                            <div class="col-sm-5">
                                <div class="input-group">
                                <input type="text" name="category_name" value="{{$category->categoryName}}" class="form-control">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </span>
                                </div>
                            </div>
                        </div>
                      </form>                   
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- /page content -->
@endsection