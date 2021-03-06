@extends('layout')
@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
  <h1 class="sub-header">Últimos empleados</h1>
 			@foreach ($latest_candidates as $category)
 			<h1>{{$category->name}}</h1>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Nombre</td>
                  <th>Tipo</th>
                  <th>Descripcion</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($category->candidates as $candidate)
                <tr>
                  <td>{{$candidate->user->full_name}}</td>
	                <td>{{ $candidate->job_type_title }}</td>
	                <td>{{ $candidate->description }}</td>
				 	<td><a href="{{ route('candidate', [$candidate->slug, $candidate->id])}}" class="btn btn-info">Ver</a></td>
                </tr>
				@endforeach
              </tbody>
            </table>
            <p><a href="{{ route('category', [$category->slug, $category->id]) }}">Ver Todos los empleados de </a></p>
          </div>
          @endforeach
          
@stop