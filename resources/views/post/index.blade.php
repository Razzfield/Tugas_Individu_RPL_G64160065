@extends('layouts.app')

@section ('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              @foreach ($posts as $post)
                    <div class="card">
                      <div class="card-header">
                      <a href="{{route('post.show', $post)}}">{{ $post -> title }}</a>
                          <div class="pull-right">
                            <div class="row">
                              <div class="col-4">
                              <form class="" action="{{ route('post.toedit', $post) }}" method="post">
                                  {{ csrf_field() }}
                                  <input type="submit" class="btn btn-sm btn-info" value="Edit" style="width:50px">
                              </form>
                            </div>
                            <div class="col-4">
                            <form class="" action="{{ route('post.destroy', $post) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete')}}
                                <input type="submit" class="btn btn-sm btn-danger" value="Hapus">
                            </form>
                          </div>
                            </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <p> {{ str_limit($post -> content, 80,'...')}} </p>
                      </div>
                    </div>
                    <br>
                @endforeach
              </div>
            </div
      </div>
  </div>
@endsection
