@extends('layout')

@section('title')
    sample
@endsection

@section('main_content')
    <h1>фотма отзыва</h1>
    @if($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach($errors->all() as $error) {
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
    @endif
    <form action="/review/check" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="введите email" class="form-control">
        <input type="text" name="subject" id="subject" placeholder="введите отзыв" class="form-control">
        <textarea name="message" id="message" cols="30" rows="10"  placeholder="введите отзыв" class="form-control"></textarea>
        <button type="submit" class="btn btn-success">отправить</button>
    </form>
@endsection
