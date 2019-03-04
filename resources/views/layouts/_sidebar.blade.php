<ul class="nav navbar-nav">
    <li>
        <a href="{{ url('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Home</a>
        <ul class="sub-menu children dropdown-menu">
            <li><a href="{{ url('detail') }}">Detail</a></li>
        </ul>
    </li>
</ul>