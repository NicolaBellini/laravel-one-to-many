@extends('layouts.admin')

@section('content')


<h1>

   create form
</h1>

@if (session('error'))
    <div class="alert alert-danger">
        <ul>
             <li>{{ session('error') }}</li>
        </ul>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">nome Progetto</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="formGroupExampleInput" placeholder="nome"  name="name" value="{{old('name')}}">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">argomento progetto</label>
      <input type="text" class="form-control @error('topic') is-invalid @enderror" id="formGroupExampleInput2" placeholder="argomento" name="topic" value="{{old('topic')}}">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput3" class="form-label">difficoltà progetto</label>
      <input type="text" class="form-control @error('difficulty') is-invalid @enderror" id="formGroupExampleInput3" placeholder="difficoltà" name="difficulty" value="{{old('difficulty')}}">
    </div>
    {{-- input img --}}
    <div class="mb-3">
      <label for="image" class="form-label">immagine</label>
      <input type="file" class="form-control" id="image" placeholder="Another input placeholder" name="image" onchange="showimage(event)">
    </div>
    <img class="thumb w-25" style="height: 350px" id="thumb" alt="" src="/img/placeholder.avif">



    <div class="d-flex justify-content-end w100">

        <button type="submit" class="btn btn-success "  >invia</button>
    </div>

    </form>

</div>

@endsection

<script>
function showimage(event){

    const thumb = document.getElementById('thumb');
    thumb.src = URL.createObjectURL(event.target.files[0]);
    // console.log(thumb.src);
}

</script>
