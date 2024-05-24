
<nav class="navbar navbar-expand-lg bg-body-tertiary my_nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BOOLPRESS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('admin.home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}" target="_blank">visita il sito</a>
        </li>
        <li class="nav-item ">
          <p class="mt-2">{{Auth::user()->name}}</p>
        </li>
        <li>
            <form action="{{route('logout')}}" class="ms-2" method="POST">
                @csrf
                @method('POST')
                {{-- @method('DELETE') --}}
                <button type="submit" class="btn btn-warning ">esci</button>
            </form>
        </li>

      </ul>
    </div>
  </div>
</nav>
