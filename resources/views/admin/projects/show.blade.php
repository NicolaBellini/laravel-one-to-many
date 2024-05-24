@extends('layouts.admin')

@section('content')


<h1>titolo: {{$project->name}}</h1>

<h1>argomento: {{$project->topic}}</h1>
<h1>difficoltà: {{$project->difficulty}}</h1>

<img class="img-fluid w-50 " src="{{asset('storage/'.$project->image)}}" alt="{{$project->name}}" onerror="this.src='/img/placeholder.avif'">
<p>{{$project->image_original_name}}</p>


@endsection
