<!-- Content Wrapper. Contains page content -->

@extends('dashboard.layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> @lang('site.add') @lang('site.products')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('site.dashboard')</a></li>
              <li class="breadcrumb-item"><a href="#">@lang('site.products')</a></li>
              <li class="breadcrumb-item active">@lang('site.add')</li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
{{-- {{url(catageries/store)}} --}}
<div class="content">
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <form action="{{url(app()->getlocale()."/products/store")}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
  <div class="card-body">

    <div class="form-group">
        <label for="exampleInputEmail1">@lang('site.name')</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">@lang('site.description')</label>
        <input type="textarea" name="descrption" class="form-control" id="exampleInputPassword1" placeholder="Enter Descrption">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">@lang('site.price')</label>
        <input  type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter price">
      </div>

      <div class="form-group">
        <label for="">@lang('site.image')</label>
        <input type="file" name="image" class="course form-control">
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label"></label>
            <select name="Section" class="form-control SlectBox" onclick="console.log($(this).val())"
                onchange="console.log('change is firing')">
                <!--placeholder-->
                <option value="" selected disabled>@lang('site.category')</option>
                @foreach ($x as $section)
    <option value="{{ $section->id }}"> {{ $section->name }}</option>
    @endforeach
</select>


</div>






<div class="card-footer">
<button type="submit" class="btn btn-primary">@lang('site.add')</button>
</div>
</form>



</div>










</div>
</div>
  <!-- /.content-wrapper -->
  @endsection
