@extends('layouts.app')

@section('content')
    <div class="container">
        <div class ="row justify-content-center">
            <div class="col-md-8 col-offset-2">
                <div class="card">
                    <div class="card-header">Edit Post</div>

                      <div class="card-body">
                        <form class ="" action="{{ route('post.update', $post) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('patch')}}
                          <div class ="form-group">
                              <label for="">Title</label>
                              <input type="text" class="form-control" name="title" placeholder="Judul Post" value="{{ $post -> title }}">
                          </div>


                          <div class ="form-group">
                              <label for="">Category</label>
                              <select name="category_id" id="" class="form-control" style="height:30px">
                              @<?php foreach ($categories as $category): ?>
                                  <option value="{{ $category->id }}"> {{ $category-> name}} </option>
                              <?php endforeach; ?>
                            </select>
                          </div>


                          <div class ="form-group">
                              <label for="">Content</label>
                              <textarea name="content" rows ="5" class = "form-control" placeholder="Ketik disini..."> {{ $post -> content }}</textarea>
                          </div>


                          <div class ="form-group">
                              <input type="submit" class ="btn btn-primary" value = "Save">
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
