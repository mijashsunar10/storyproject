
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="d-flex align-items-center">
        <a href="{{route('storyindex')}}">
        <button class="btn btn-outline-secondary me-2 btn-dark text-white " type="button">&lt;</button>
      </a>
        <div class="m-0">
          <small class="text-muted d-block">Add Story Name</small>
          <h5 class="navbar-brand">Untitled Story</h5>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div>`
          <a href="{{route('storyindex')}}">
          <button class="btn btn-outline-secondary me-2" type="button">Cancel</button>
          </a>
         <a href="">
          <button class="btn btn-dark" type="button">Submit</button>
        </a>
        </div>
      </div>
    </div>
  </nav>