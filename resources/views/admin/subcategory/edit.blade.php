@extends('admin.layout.master')
@section('title','Edit Category')
@section('content')
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header card">
      <div class="row align-items-end">
        <div class="col-lg-8">
          <div class="page-header-title">
            <i class="feather icon-clipboard bg-c-blue"></i>
            <div class="d-inline">
              <h5>Edit Sub Category</h5>
              <span></span>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="page-header-breadcrumb">
            <ul class=" breadcrumb breadcrumb-title">
              <li class="breadcrumb-item">
                <a href="#!"><i class="feather icon-home"></i></a>
              </li>
              <li class="breadcrumb-item"><a href="#!">Admin</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#!">Edit Sub Category</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- [ breadcrumb ] end -->
  <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
      <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
          <div class="row">
            <div class="col-sm-12">
              <!-- Basic Form Inputs card start -->
              <div class="card">
                <div class="card-header">
                  <h5>Edit Sub Category Details</h5>
                  <a href="{{ url('adminpanel/subcategory/list') }}">
                               <button type="button" class="btn waves-effect waves-light hor-grd btn-grd-primary pull-right">Back</button> 
                </a>
                </div>
                <div class="card-block">
                    @if(Session::has('success'))
                       <div class="alert alert-success background-success col-md-10">
                       <strong>Success! </strong> {{ Session::get('success') }}
                       </div>
                    @endif
                   <form method="post" autocomplete="off" enctype="multipart/form-data" novalidate="novalidate" id="NewForm">
                   @csrf

                   <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Select Category*</label>
                    <div class="col-sm-8">
                      <select name="category" class="form-control">
                        <option value="">Select Catgory</option>
                        @foreach(getCategory() as $cat)
                        <option value="{{ $cat->id }}" {{ (old('category')==$cat->id) ? 'selected=""' :null }} {{ ($row->category_id==$cat->id && old("category")=="") ? 'selected=""' :null }}>{{ $cat->name }}</option>
                        @endforeach
                      </select>
                      <span class="text-danger">
                        @error('category')
                        {{ $message }}
                       @enderror
                      </span>
                    </div>
                  </div>

                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Name*</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"
                        placeholder="Name*" id="plan_name" name="name" maxlength="30" onkeypress="return isChar(event);" value="{{ (old('name')=="") ? $row->name : old('name') }}">
                        <span class="text-danger">
                          @error('name')
                          {{ $message }}
                         @enderror
                        </span>
                      </div>
                    </div>
  
                    
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Select Status*</label>
                      <div class="col-sm-8">
                        <select name="status" class="form-control">
                          <option value="">Select Status</option>
                          <option value="1"  {{ (old('status')=="" && $row->status=='1') ? 'selected=""' :null }} {{ (old('status')=='1') ? 'selected=""' :null }}>Active</option>
                          <option value="0" {{ (old('status')=="" && $row->status=='0') ? 'selected=""' :null }} {{ (old('status')=='0') ? 'selected=""' :null }}>Inactive</option>
                        </select>
                        <span class="text-danger">
                          @error('status')
                          {{ $message }}
                         @enderror
                        </span>
                      </div>
                    </div>
  
  
                    <div class="form-group row">
                        <label for="newstitle" class="col-sm-2 col-form-label">&nbsp;</label>
                        <div class="col-sm-10">
                           <span id="errormsg"></span>
                        </div>
                      </div>
  
  
                      <div class="col-sm-12 col-md-12 col-xs-12">
                        <div class="form-group">
                          <a href="{{ url('adminpanel/subcategory/list') }}" class="btn waves-effect waves-light hor-grd btn-grd-danger text-white">Go Back</a>
                           &nbsp;&nbsp;
  
                          <input type="submit" class="btn waves-effect waves-light hor-grd btn-grd-success submitb" value="Update">
                        </div>
                      </div>
                    
                    
                      </form>
                    </div>
                  </div>
  
                  
            </div>
          </div>
        </div>
        <!-- Page body end -->
      </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
@endsection