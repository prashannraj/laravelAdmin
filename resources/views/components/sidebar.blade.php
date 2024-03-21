<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{route('dashboard')}}"> <img alt="image" src="/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">LARAVEL</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="{{route('year.index')}}" class="nav-link"><i
                  data-feather="briefcase"></i><span>Year</span></a>
            </li>
            <li class="dropdown">
              <a href="{{route('post.index')}}" class="nav-link"><i data-feather="command"></i><span>Posts</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Services</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('service.index')}}">service</a></li>
                <li><a class="nav-link" href="{{route('subservice.index')}}">sub service</a></li>
                <li><a class="nav-link" href="{{route('supservice.index')}}">super service</a></li>
              </ul>
            </li>
            <li class="dropdown">
                 <a href="{{route('qualification.index')}}" class="nav-link"><i data-feather="command"></i><span>Qualification</span></a>
            </li>
            <li class="dropdown">
              <a href="{{route('level.index')}}" class="nav-link"><i data-feather="command"></i><span>Level</span></a>
            </li>
            <li class="dropdown">
              <a href="{{route('university.index')}}" class="nav-link"><i data-feather="command"></i><span>University</span></a>
            </li>
            <li class="dropdown">
                 <a href="{{route('quata.index')}}" class="nav-link"><i data-feather="command"></i><span>Quata</span></a>
            </li>
            <li class="dropdown">
                <a href="{{route('darta.index')}}" class="nav-link"><i data-feather="command"></i><span>Darta</span></a>
            </li>
            <li class="dropdown">
                 <a href="{{route('chalani.index')}}" class="nav-link"><i data-feather="command"></i><span>Chalani</span></a>
            </li>
    
        