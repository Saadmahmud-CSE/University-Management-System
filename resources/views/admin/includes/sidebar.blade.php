 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar bg-primary">

<ul class="sidebar-nav bg-info" id="sidebar-nav">
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Home</span>
    </a>
  @if(Session::has('userrole') && Session::get('userrole')=='Student')
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/studentenroll') }}">
      <i class="bi bi-person"></i><span>Students Information</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/projectidea') }}">
      <i class="bi bi-file-text"></i><span>Project Idea</span>
    </a>
  </li>
      
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/createteam') }}">
      <i class="bi bi-people"></i><span>Create Group</span>
    </a>
  </li>
@endif
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/sessions') }}">
      <i class="bi bi-grid-fill"></i>
      <span>Sessions</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/departments') }}">
      <i class="bi bi-file-text"></i>
      <span>Departments</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/sections') }}">
      <i class="bi bi-grid"></i>
      <span>Sections</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/courses') }}">
      <i class="bi bi-file-text-fill"></i>
      <span>Courses</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('admin/users') }}">
          <i class="bi bi-circle"></i><span>All Users</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->
  <!-- @if(Session::has('userrole') && Session::get('userrole')=='Student')
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Courses</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('admin/my-courses') }}">
          <i class="bi bi-circle"></i><span>My Courses</span>
        </a>
      </li>
    </ul>
  </li>End Tables Nav -->
  <!-- @elseif(Session::has('userrole') && Session::get('userrole')=='Teacher')
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Courses Marks Assign</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('admin/give-marks') }}">
          <i class="bi bi-circle"></i><span>Give Marks</span>
        </a>
      </li>
    </ul>
  </li> End Tables Nav -->
  @endif


  <!-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('admin/form') }}">
          <i class="bi bi-circle"></i><span>Form Elements</span>
        </a>
      </li>
      <li>
        <a href="forms-layouts.html">
          <i class="bi bi-circle"></i><span>Form Layouts</span>
        </a>
      </li>
      <li>
        <a href="forms-editors.html">
          <i class="bi bi-circle"></i><span>Form Editors</span>
        </a>
      </li>
      <li>
        <a href="forms-validation.html">
          <i class="bi bi-circle"></i><span>Form Validation</span>
        </a>
      </li>
    </ul>
  </li> -->
  <!-- End Forms Nav -->

  <!-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('admin/tables') }}">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="tables-data.html">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li> -->
  <!-- End Tables Nav -->

  

  <li class="nav-heading text-white">Features</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('admin/login') }}">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Logout</span>
    </a>
  </li><!-- End Login Page Nav -->

</ul>

</aside><!-- End Sidebar-->