  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{asset('admin/user.png')}}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{Auth::user()->name}}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{route('admin.home')}}" class="nav-link @if($active=='dashboard') active @endif ">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li
                      class="nav-item has-treeview @if($active=='addcategory' || $active=='allcategory') menu-open @endif">
                      <a href="#" class="nav-link">
                          <i class="nav-icon"></i>
                          <p>
                              Category
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{route('add.category')}}"
                                  class="nav-link  @if($active=='addcategory') active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Category</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('all.category')}}"
                                  class="nav-link  @if($active=='allcategory') active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>List Category</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item has-treeview @if($active=='addfields' || $active=='addproduct' || $active=='allproduct') menu-open @endif">
                      <a href="#" class="nav-link">
                          <i class="nav-icon"></i>
                          <p>
                              Products
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{route('add.fields')}}" class="nav-link @if($active=='addfields') active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Fields</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('add.product')}}" class="nav-link @if($active=='addproduct') active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Product</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{route('all.product')}}" class="nav-link @if($active=='allproduct') active @endif">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>List Products</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon"></i>
                          <p>
                              Users
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon"></i>
                          <p>
                              Orders
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>