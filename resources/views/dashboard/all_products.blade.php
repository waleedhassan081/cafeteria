@extends('layout.dlayout')
@section('content')
    <!-- page content -->
    <style>
#parent {
  display: flex;
}
    
    </style>
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                    <div class="x_title">
                        <h2>Product List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @if (session()->get('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{{session()->get('success')}}</li>
                                </ul>
                            </div>

                        @endif 
                            <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                      <thead>
                                        <tr class="headings">
                                          <th class="column-title">Sr.No# </th>
                                          <th class="column-title">Product Name</th>
                                          <th class="column-title">Category Name </th>
                                          <th class="column-title no-link last"><span class="nobr">Action</span>
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @php
                                              $i=1;
                                          @endphp
                                          @foreach ($products as $product)
                                          <tr class="even pointer">
                                          <td class=" ">@php
                                                            echo $i++;
                                                        @endphp
                                          </td>
                                          <td class=" ">{{$product->productName}} </td>
                                                <td class=" ">{{$product->categoryName}} </td>
                                                <td class=" ">
                                                    <div id="parent">
                                                        <div id="left">
                                                            <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Edit
                                                            </a>
                                                        </div>
                                                        <div id="right">
                                                            <form action="{{ route('product.destroy', $product->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                           </form>
                                                        </div>
                                                    </div>         


                                                </td>
                                                </td>
                                              </tr>                                              
                                          @endforeach

                                      </tbody>
                                    </table>
                                  </div>                                       
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- /page content -->
@endsection