<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item {{ (request()->is('admin/book') || request()->is('admin/book/create')) ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#books-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-book"></i><span>Books</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="books-nav" class="nav-content collapse {{ (request()->is('admin/book') || request()->is('admin/book/create') || request()->is('admin/reading-list') || request()->is('admin/favourite') || request()->is('admin/export')) ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('admin/book') }}" class="{{ (request()->is('admin/book')) ? 'active' : '' }}">
          <i class="bi bi-circle"></i><span>All Books</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/book/create') }}" class="{{ (request()->is('admin/book/create')) ? 'active' : '' }}">
          <i class="bi bi-circle"></i><span>Add New</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/reading-list') }}" class="{{ (request()->is('admin/reading-list')) ? 'active' : '' }}">
          <i class="bi bi-circle"></i><span>Reading List</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/favourite') }}" class="{{ (request()->is('admin/favourite')) ? 'active' : '' }}">
          <i class="bi bi-circle"></i><span>Favourite Books</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/export') }}" class="{{ (request()->is('admin/export')) ? 'active' : '' }}">
          <i class="bi bi-circle"></i><span>Export</span>
        </a>
      </li>
    </ul>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/category') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/category') }}">
      <i class="bi bi-bounding-box"></i>
      <span>Category</span>
    </a>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/author') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/author') }}">
      <i class="bi bi-person-video"></i>
      <span>Author</span>
    </a>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/publisher') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/publisher') }}">
      <i class="bi bi-card-list"></i>
      <span>Publishers</span>
    </a>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/collection_method') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/collection_method') }}">
      <i class="bi bi-truck"></i>
      <span>Collection Methods</span>
    </a>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/storage') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/storage') }}">
      <i class="bi bi-bookshelf"></i>
      <span>Storages</span>
    </a>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/state') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/state') }}">
      <i class="bi bi-activity"></i>
      <span>States</span>
    </a>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/user') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-people"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('admin/user') }}">
          <i class="bi bi-circle"></i><span>All Users</span>
        </a>
      </li>
      <li>
        <a href="{{ url('admin/user/create') }}">
          <i class="bi bi-circle"></i><span>Add New</span>
        </a>
      </li>
    </ul>
  </li><!-- End Nav Item -->

  <li class="nav-item {{ request()->is('admin/utility') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/utility') }}">
      <i class="bi bi-sliders2-vertical"></i>
      <span>Utility</span>
    </a>
  </li><!-- End Blank Page Nav -->

  <li class="nav-item {{ request()->is('admin/user') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="{{ url('admin/setting') }}">
      <i class="bi bi-gear"></i>
      <span>Settings</span>
    </a>
  </li><!-- End Blank Page Nav -->

</ul>

</aside><!-- End Sidebar-->