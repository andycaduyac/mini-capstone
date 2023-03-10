<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">FeedBook</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-primary">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                {{-- <img src="./assets/img/brand/blue.png"> --}}
                FeedBook
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/students">Students</a>
          </li>
          @role('Super-Admin')
          <li class="nav-item">
            <a class="nav-link" href="/users">Users</a>
          </li>
          @endrole
          {{-- <li class="nav-item">
            <button type="button" class="btn btn-block btn-default mb-3" data-toggle="modal" data-target="#login-modal-form">Login</button>
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:;" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
              {{-- <a class="dropdown-item" href="javascript:;">Profile</a>
              <a class="dropdown-item" href="javascript:;">Settings</a>
              <div class="dropdown-divider"></div> --}}
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
