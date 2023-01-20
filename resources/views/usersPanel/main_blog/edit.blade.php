@extends('usersPanel.master')
@section('title')
    Create Blogs
@endsection

@section('main')
  <div class="container">
    
  <div class="page-title-box d-flex align-items-center justify-content-between">
    <h4 class="mb-0 font-size-18">Create Blog</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a class="btn btn-success rounded-0 text-light" href="{{ route('main_blog.index') }}"><i class="fa fa-list"></i> Show</a></li>
        </ol>
    </div>

  </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if(Session::get('delete'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('delete') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form class="user" method="POST" action="" enctype="multipart/form-data">
                      @csrf

                      <div class="row mt-4">
                          <div class="col-md-7 card">
                              <div class="form-row">
                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Product Name</label>
                                      <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Product Code</label>
                                      <input type="text" name="code" class="form-control" value="{{ old('code') }}" required>
                                  </div>

                             

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Child Category</label>
                                      <select name="childcategory_id" id="childcategory_id" class="form-control">

                                      </select>
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Brand</label>
                                      <select name="brand_id" id="" class="form-control" required>
                                          <option value="">Please select</option>
                                         
                                      </select>
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Pickup</label>
                                      <select name="pickup_id" id="pickup_id" class="form-control" required>
                                          <option value="">Please select</option>
                                         
                                      </select>
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Unit</label>
                                      <input type="text" name="unit" class="form-control" value="{{ old('unit') }}" required>
                                  </div>

                                  <div class="form-group col-sm-6" style="margin-top: 35px;">
                                      <label class="col-form-label">Tags</label>
                                      <input type="text" name="tags" class="form-control" data-role="tagsinput">
                                  </div>

                                  <div class="form-group col-sm-4">
                                      <label class="col-form-label">Purchase Price</label>
                                      <input type="text" name="purchase_price" class="form-control" value="{{ old('purchase_price') }}">
                                  </div>

                                  <div class="form-group col-sm-4">
                                      <label class="col-form-label">Selling Price</label>
                                      <input type="text" name="selling_price" class="form-control" value="{{ old('selling_price') }}" required>
                                  </div>

                                  <div class="form-group col-sm-4">
                                      <label class="col-form-label">Discount Price</label>
                                      <input type="text" name="discount_price" class="form-control" value="{{ old('discount_price') }}">
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Warehouse</label>
                                      <select name="warehouse" id="" class="form-control" required>
                                          <option value="">Please select</option>
                                       
                                      </select>
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Stock</label>
                                      <input type="text" name="stock_quantity" class="form-control" value="{{ old('stock_quantity') }}">
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Color</label>
                                      <input type="text" name="color" class="form-control" data-role="tagsinput">
                                  </div>

                                  <div class="form-group col-sm-6">
                                      <label class="col-form-label">Size</label>
                                      <input type="text" name="size" class="form-control" data-role="tagsinput">
                                  </div>

                                  <div class="form-group col-sm-12">
                                      <label class="col-form-label">Product Details</label>
                                      <textarea name="description" cols="30" rows="10" class="form-control" id="summernote">{{ old('description') }}</textarea>
                                  </div>

                                  <div class="form-group col-sm-12">
                                      <label class="col-form-label">Video Embed Code</label>
                                      <textarea name="video" rows="3" class="form-control">{{ old('video') }}</textarea>
                                  </div>

                                  <div class="form-group col-md-12 mt-4">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                              </div>
                          </div>

                          <div class="col-md-5">
                              <div class="form-row card p-2">
                                  <div class="form-group col-sm-12">
                                      <label for="thumbnail" class="col-form-label ">Main Thumbnail:</label>
                                      <input type="file" class="form-control dropify image" name="thumbnail" id="thumbnail" required>
                                  </div>

                                  <div class="form-group col-sm-12">
                                      <label for="brand_logo" class="col-form-label "></label>
                                      <table class="table" id="daynamic_table">
                                          <tr>
                                              <th colspan="2" style="border: none !important; padding: 0px;">
                                                  <span>More Image:</span>
                                              </th>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <input type="file" class="form-control image" name="images[]" accept="image/*" required>
                                              </td>
                                              <td>
                                                  <button type="button" class="btn btn-sm btn-success" name="add" id="add">+</button>
                                              </td>
                                          </tr>
                                      </table>
                                  </div>

                                  <div class="form-group col-sm-12">
                                      <div class="custom-control custom-switch">
                                          <input type="checkbox" class="custom-control-input" name="featured" id="featured" >
                                          <label class="custom-control-label" for="featured">Featured Product</label>
                                      </div>
                                  </div>
                                  <div class="form-group col-sm-12">
                                      <div class="custom-control custom-switch">
                                          <input type="checkbox" class="custom-control-input" name="toady_deal_id" id="toady_deal_id" >
                                          <label class="custom-control-label" for="toady_deal_id">Toady Deal</label>
                                      </div>
                                  </div>
                                  <div class="form-group col-sm-12">
                                      <div class="custom-control custom-switch">
                                          <input type="checkbox" class="custom-control-input" name="status" id="status" >
                                          <label class="custom-control-label" for="status">Status</label>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </form>


                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
  </div>
@endsection
