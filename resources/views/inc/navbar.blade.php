<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/simplewebsite/public/">simpApp</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
              <a class="nav-link" href="/simplewebsite/public/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
              <a class="nav-link" href="/simplewebsite/public/about">About</a>
            </li>
            <li class="nav-item {{Request::is('contacts') ? 'active' : ''}}">
              <a class="nav-link" href="/simplewebsite/public/contacts">Contacts</a>
            </li>
          </ul>
        </div>
    </div>    
</nav>