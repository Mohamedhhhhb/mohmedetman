@extends('dashboard.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@lang('site.products')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('home')}}">@lang('site.dashboard')</a></li>
              <li class="breadcrumb-item"><a href="{{url('products/show')}}">@lang('site.products')</a></li>
              <li class="breadcrumb-item active">@lang('site.add')</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


            <!-- /.card-header -->

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th >#</th>
                    <th>@lang('site.name')</th>
                    <th style="width: 40%">@lang('site.description')</th>
                    <th style="width: 40%">@lang('site.price')</th>
                    <th style="width: 40%">@lang('site.image')</th>
                    <th style="width: 40%">@lang('site.category')</th>
                    <th style="width: 35%">@lang('site.action')</th>

                  </tr>
                </thead>

    <tbody>
        @php
            $i = 0 ;

        @endphp
        @foreach ($p as $index=>$category)
        @php
        $i ++;

    @endphp
            <tr>
                <td>{{ $i }}</td>

                <td>      {{ $category->name }} </td>
                <td>{{ $category->descrptions }}</td>
                <td>{{ $category->price }}</td>

            <td>
                <img src="{{ url('public/Image/'.$category->image) }}"
                style="height: 50px; width: 50px;">
            </td>

            @if (App::isLocale('ar'))
        <td>  {{ $category->section_ar->name }}</td>
            @endif
            @if (App::isLocale('en'))
            <td>  {{ $category->section->name }}</td>
                @endif
                <td>

                    <a href="{{url('products/edit')}}/{{$category->id}}">edit</a>
                    <a href="{{url('products/delete')}}/{{$category->id}}">delete</a>
                </td>


            </tr>

        @endforeach
        </tbody>

    </table>








</div>



  @endsection





