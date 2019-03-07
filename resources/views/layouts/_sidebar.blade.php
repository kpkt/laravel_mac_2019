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
    <li>
        <a href="{{ url('calc') }}"> <i class="menu-icon fa fa-calculator"></i>Calculator </a>
    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false"><i class="menu-icon fa fa-file-o"></i>Profile</a>
        <ul class="sub-menu children dropdown-menu">
            <li><a href="{{ route('home.list-profile') }}">Profile</a></li>
            <li><a href="{{ route('home.list-all-profile') }}">Profile with Trash</a></li>
            <li><a href="{{ route('home.list-trash-profile') }}">Trash Profile</a></li>
        </ul>
    </li>

    <li>
        <a href="{{ route('categories.index') }}"> <i class="menu-icon fa fa-tasks"></i>Category </a>
        <a href="{{ route('tags.index') }}"> <i class="menu-icon fa fa-tasks"></i>Tag </a>
        <a href="{{ route('posts.index') }}"> <i class="menu-icon fa fa-wordpress"></i>Post </a>
        <a href="{{ route('pdf.controller') }}" target="_blank"> <i class="menu-icon fa fa-file-pdf-o"></i>PDF Controller </a>
        <a href="{{ route('pdf.view') }}" target="_blank"> <i class="menu-icon fa fa-html5"></i>PDF Load View </a>
    </li>

</ul>