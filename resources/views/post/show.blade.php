@extends('layouts.app')

@section ('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <span> {{ $post -> title }}</span>
                </div>
                <div class="card-body">
                    <p> {{ $post -> content}} </p>
                </div>
            </div>
@endsection
