<aside class="main-sidebar sidebar-dark-primary elevation-4 z-40">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">LMS</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->first_name  }}  </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column active" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Dashboard -->
          <li class="nav-item">
            <a href="{{ route ('dashboard') }}" class="nav-link {{request()->is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          @if(Auth::user()->hasRole('teacher'))
          <!-- Subject -->
          <li class="nav-item">
            <a href="{{ route('teacher_subject') }}" class="nav-link {{request()->is('subject') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Subject
              </p>
            </a>
          </li>
          @endif

          @if(Auth::user()->hasRole('teacher') || Auth::user()->hasRole('admin'))
          <!-- Accounts -->
          <li class="nav-item">
            <a href="{{route('accounts')}}" class="nav-link {{request()->is('accounts') || request()->is('register') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Accounts
              </p>
            </a>
          </li>
          @endif

          <!-- Notification -->
          <li class="nav-item">
            <a href="#" class="nav-link {{request()->is('admin/notification') ? 'active' : '' }}">
              <i class="nav-icon far fa-bell"></i>
              <p>
                Notification
              </p>
            </a>
          </li>
          
          <!-- Profile -->
          <li class="nav-item">
            <a href="{{ route('profile') }}" class="nav-link {{request()->is('profile') || request()->is('profile/update')   ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>