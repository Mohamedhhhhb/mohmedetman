 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('/') }}/public/Image/202303261325336253894_176456825166016_7361629969058917608_n.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">@lang('site.Menu')</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">@lang('site.Admin user') </a>
        </div>
      </div>



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item menu-open">
            <a href="" class="nav-link active">

              <p>
                @lang('site.categories')                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('catageries/add')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('site.add') @lang('site.categories')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('catageries/show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('site.show') @lang('site.categories')</p>
                </a>
              </li>
            </ul>
          </li>




          </li>




          <li class="nav-item menu-open">
            <a href="" class="nav-link active">

              <p>
                @lang('site.products')
  <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('products/create')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('site.add') @lang('site.products')</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('products/show')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>@lang('site.show') @lang('site.products')</p>
                </a>
              </li>
            </ul>
          </li>




          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
