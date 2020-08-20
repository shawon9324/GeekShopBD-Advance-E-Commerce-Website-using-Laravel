  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ asset('img/admin_img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('img/admin_img/admin_photos/'.Auth::guard('admin')->user()->image) }}"
                      class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">
                      <font color="cyan">{{ Auth::guard('admin')->user()->name }}</font>
                  </a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      @if(Session::get('page')=="dashboard")
                      <?php $active ="active"; ?>
                      @else
                      <?php $active=""; ?>
                      @endif
                      <a href="{{ url('admin/dashboard') }}" class="nav-link {{ $active }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <!--SETTINGS-->
                  @if(Session::get('page')=="settings" || Session::get('page')=="update-admin-details" ||Session::get('page')=="profile")
                  <?php $active ="active"; $menu = "open" ?>
                  @else
                  <?php $active=""; $menu = "close";?>
                  @endif

                  <li class="nav-item has-treeview menu-{{ $menu }}">
                      <a href="" class="nav-link {{ $active }}">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Settings
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      @if(Session::get('page')=="profile")
                          <?php $active ="active"; ?>
                          @else
                          <?php $active=""; ?>
                          @endif
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('admin/profile') }}" class="nav-link {{ $active }}">
                                  <i class="nav-icon far fa-circle text-warning"></i>
                                  <p>Admin Profile</p>
                              </a>
                          </li>
                          @if(Session::get('page')=="update-admin-details")
                          <?php $active ="active"; ?>
                          @else
                          <?php $active=""; ?>
                          @endif
                          <li class="nav-item">
                              <a href="{{ url('admin/update-admin-details') }}" class="nav-link {{ $active }}">
                                  <i class="nav-icon far fa-circle text-warning"></i>
                                  <p>Update Admin Details</p>
                              </a>
                          </li>
                          @if(Session::get('page')=="settings")
                          <?php $active ="active";?>
                          @else
                          <?php $active=""; ?>
                          @endif
                          <li class="nav-item">
                              <a href="{{ url('admin/settings') }}" class="nav-link {{ $active }}">
                                  <i class="nav-icon far fa-circle text-warning"></i>
                                  <p>Update Admin Password</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <!--Catalogues-->
                        @if(Session::get('page')=="sections" || Session::get('page')=="categories" ||Session::get('page')=="products"
                        ||Session::get('page')=="brands")
                        <?php $active ="active"; $menu = "open" ?>
                        @else
                        <?php $active=""; $menu = "close";?>
                        @endif

                        <li class="nav-item has-treeview menu-{{ $menu }}">
                            <a href="" class="nav-link {{ $active }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Catalogues
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if(Session::get('page')=="sections")
                                <?php $active ="active"; ?>
                                @else
                                <?php $active=""; ?>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ url('admin/sections') }}" class="nav-link {{ $active }}">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Sections</p>
                                    </a>
                                </li>
                                @if(Session::get('page')=="brands")
                                <?php $active ="active"; ?>
                                @else
                                <?php $active=""; ?>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ url('admin/brands') }}" class="nav-link {{ $active }}">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Brands</p>
                                    </a>
                                </li>
                                @if(Session::get('page')=="categories")
                                <?php $active ="active";?>
                                @else
                                <?php $active=""; ?>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ url('admin/categories') }}" class="nav-link {{ $active }}">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                @if(Session::get('page')=="products")
                                <?php $active ="active";?>
                                @else
                                <?php $active=""; ?>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Products</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!--Banners-->
                        @if(Session::get('page')=="banners")
                        <?php $active ="active"; $menu = "open" ?>
                        @else
                        <?php $active=""; $menu = "close";?>
                        @endif

                        <li class="nav-item has-treeview menu-{{ $menu }}">
                            <a href="" class="nav-link {{ $active }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Others
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if(Session::get('page')=="banners")
                                <?php $active ="active"; ?>
                                @else
                                <?php $active=""; ?>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ url('admin/banners') }}" class="nav-link {{ $active }}">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Banners</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>