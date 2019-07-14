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
                    <h2>Add New Product</h2>

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
                <form  action="{{route('product.store')}}" method="POST"  class="form-horizontal form-label-left">
                        @csrf
                        <div class="form-group">
                                <label class="control-label col-md-3" for="first-name">Select Category <span class="required">*</span>
                                </label>
                                <div class="col-md-7">
                                  <select class="form-control col-md-7 col-xs-12" name="categoryName" id="categoryName">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="last-name">Product Name <span class="required">*</span>
                                </label>
                                <div class="col-md-7">
                                  <input type="text" id="productName" name="productName" class="form-control col-md-7 col-xs-12">
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-md-9" for="last-name">
                                </label>
                                <div class="col-md-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Add</button>
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