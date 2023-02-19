<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="{{ url('admin/dashboard') }}" class="logo d-flex align-items-center">
    <span class="d-none d-lg-block">FLMS</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar" x-data="{ 
    
    searchQuery : '',
    books : '',
    showNothingInSearch : false,
    showResultInSearch : false,

    baseUrl : '<?php echo url('admin/book') ?>',

    async searchQuerySubmit(){

      if(this.searchQuery.trim().length > 2){

        this.books = await(
            
            await fetch('/admin/anything-search', {
                method : 'POST',
                headers : {
                    'Content-type' : 'application/json',
                    'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content,
                },
                body : JSON.stringify({ 
                    query : this.searchQuery 
                }),
            })).json();

        if(this.books.length < 1 ){
            this.showNothingInSearch = true;
            this.showResultInSearch = false;
        }
        else{
            this.showNothingInSearch = false;
            this.showResultInSearch = true;
        }

      }
      else
      {
        this.showNothingInSearch = false;
        this.showResultInSearch = false;
      }

    }, 

  }">
  <form class="search-form d-flex align-items-center" method="POST" action="#" x-on:submit.prevent="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword" x-model="searchQuery" @input.debounce="searchQuerySubmit">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>

  <div class="topbar-search-results position-absolute">
    
    <div class="positive-result bg-light p-2 border border-info rounded-bottom" x-show="showResultInSearch" style="display: none;">
      <ul class="m-0 list-unstyled p-2">
        <template x-for="book in books">
          <li>
            <a x-bind:href=" baseUrl + '/' + book.id">
              <span x-text="book.title_bn"></span>
              <p class="fw-sm text-secondary">
                <template x-for="author in book.authors">
                    <span x-text="author.title_bn"></span>
                </template>
                <span class="s-publisher text-info d-block">
                  <template x-if="typeof(book.publisher) !== 'undefined'">
                    <span class="fw-light" x-text="book.publisher.title_bn"></span>
                  </template>
                </span>
              </p>
            </a>
          </li>
        </template>      
      </ul>
    </div>

    <p x-show="showNothingInSearch" class="nothing-result text-danger positive-result bg-light p-2 border border-dark rounded-bottom" style="display: none;">
      Nothing found according to the query.
    </p>

  </div>

</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item m-5">

          <a class="align-items-center" href="{{ url('/') }}" target="_blank">
            <i class="bi bi-browser-chrome m-1"></i>
            <span>View Frontend</span>
          </a>

    </li>

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="{{ asset('assets/avatar.png')}}" alt="Avatar" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>{{ auth()->user()->name }}</h6>
          <span>{{ ucfirst(auth()->user()->role) }}</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{ url('admin/logout') }}">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
