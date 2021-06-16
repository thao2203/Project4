<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link" style="background: #fef5ef;color: black;font-size: larger;">
      <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>HONO</strong> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlte/dist/img/avt2.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{session()->get('admin_name')}}</a>
          <a href="/logout">Đăng xuất</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý loại sản phẩm

                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('blogs.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Quản lý bài viết
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý nhà cung cấp
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý hóa đơn nhập
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="{{ route('order.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Quản lý đơn hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Thống Kê
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>