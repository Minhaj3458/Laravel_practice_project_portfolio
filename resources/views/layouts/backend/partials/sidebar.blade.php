 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('frontend_home_page')}}" class="brand-link">
      <img src="{{ asset('assets/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src=" {{ asset('assets/backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item menu-open">
            <a href="{{ route('auth_register') }}" class="{{ route('auth_register') ? 'active' : '' }}  nav-link">
             <i class="nav-icon far fa-image"></i>
              <p>
               Auth Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('auth_register' )}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Auth</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_auth')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Auth</p>
                </a>
              </li>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="{{ route('create_slider') }}" class="{{ route('create_slider') ? 'active' : '' }}  nav-link">
             <i class="nav-icon far fa-image"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create_slider' )}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_slider')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage slider</p>
                </a>
              </li>
              </li>
            </ul>
          </li>

           <li class="nav-item menu-open">
            <a href="{{ route('crate_socialMedia')}}" class="nav-link">
             <i class="nav-icon fas fa-edit"></i>
              <p>
                Social Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('crate_socialMedia' )}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Social_Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('show_socialMedia')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Social_Media</p>
                </a>
              </li>
              </li>
            </ul>
          </li>
           <li class="nav-item menu-open">
            <a href="{{ route('crate_about')}}" class="{{ route('crate_about') ? 'active' : '' }} nav-link">
             <i class="nav-icon fas fa-edit"></i>
              <p>
                About
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('crate_about' )}}" class="{{ route('crate_about') ? 'active' : '' }} nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_about')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage About</p>
                </a>
              </li>
              </li>
            </ul>
          </li>
           
           <li class="nav-item menu-open">
            <a href="{{ route('crate_skill')}}" class="{{ route('crate_skill') ? 'active' : '' }} nav-link">
             <i class="nav-icon fas fa-edit"></i>
              <p>
                Skill
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('crate_skill')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Skill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_skill')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Skill</p>
                </a>
              </li>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ route('crate_port_exp1')}}" class="{{ route('crate_port_exp1') ? 'active' : '' }} nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Portfolio
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Portfolio_Experience1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('crate_port_exp1')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Port_Exp1 </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage_port_exp1')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Port_Exp1 </p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              
             
            </ul>

             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Portfolio_Experience2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('crate_port_exp2')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Port_Exp2 </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage_port_exp2')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Port_Exp2 </p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              
             
            </ul>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Portfolio_Experience3
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('crate_port_exp3')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Port_Exp3 </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('manage_port_exp3')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Port_Exp3</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              
            </ul>
           </li>

            <li class="nav-item menu-open">
            <a href="" class=" nav-link">
             <i class="nav-icon fas fa-edit"></i>
              <p>
                Work Experience
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create_work_exper')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Work Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_work_exper')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Work Experience</p>
                </a>
              </li>
              </li>
            </ul>
          </li>

            <li class="nav-item menu-open">
            <a href="" class=" nav-link">
             <i class="nav-icon fas fa-edit"></i>
              <p>
                Education
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create_education')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_education')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Education</p>
                </a>
              </li>
              </li>
            </ul>
          </li>

            <li class="nav-item menu-open">
            <a href="" class=" nav-link">
             <i class="nav-icon fas fa-edit"></i>
              <p>
             Reference
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('create_reference')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Reference</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_reference')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Reference</p>
                </a>
              </li>
              </li>
            </ul>
          </li>
           
            <li class="nav-item menu-open">
            <a href="" class=" nav-link">
             <i class="nav-icon fas fa-edit"></i>
              <p>
               Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('manage_contact')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Contact</p>
                </a>
              </li>
              </li>
            </ul>
          </li>

      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>