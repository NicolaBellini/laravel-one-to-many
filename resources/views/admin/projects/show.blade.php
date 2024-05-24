@extends('layouts.admin')

@section('content')


<h1>titolo: {{$project->name}}</h1>

<h1>argomento: {{$project->topic}}</h1>
<h1>difficoltà: {{$project->difficulty}}</h1>
{{-- stampo la categoria se presente --}}
@if ($project->type)
<p>categoria: <span class="badge text-bg-primary">{{$project->type?->name}}</span></p>
@endif

<img class="img-fluid w-50 " src="{{asset('storage/'.$project->image)}}" alt="{{$project->name}}" onerror="this.src='/img/placeholder.avif'">
<p>{{$project->image_original_name}}</p>


@endsection
