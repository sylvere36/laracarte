<nav class="navbar navbar-default navbar-static">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('root_path') }}">{{ config("app.name") }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ root_active_page('root_path') }}"><a href="{{ route('root_path') }}">Home</a></li>
            <li class="{{ root_active_page('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
            <li><a href="#contact">Artisans</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Laravel.com</a></li>
                <li><a href="#">Laravel.io</a></li>
                <li><a href="#">Laracast</a></li>
                <li><a href="#">Larajobs</a></li>
                <li><a href="#">Laravel News</a></li>
                <li><a href="#">Larachat</a></li>
              </ul>
            </li>
            <li class="{{ root_active_page('contact_path') }}"><a href="{{ route('contact_path') }}">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>