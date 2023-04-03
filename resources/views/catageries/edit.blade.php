<!-- Content Wrapper. Contains page content -->

@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">fzddfzsdHome</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
{{-- {{url(catageries/store)}} --}}
    <form action="{{url('catageries/update')}}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('put') }}
  <div class="card-body">
    <input type="text" value="{{$i->id}}" name="id" hidden="true">

    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" value="{{$i->name}}" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Descrption</label>
        <input type="textarea"value="{{$i->descrptions}}" name="descrption" class="form-control" id="exampleInputPassword1" placeholder="Enter Descrption">
    </div>

    <div class="form-group">
        <input type="file" name="image" class="course form-control">
        </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">update</button>
  </div>
</form>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
  @endsection
