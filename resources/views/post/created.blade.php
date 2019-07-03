        @extends('layouts.app')

        @section('content')
        <div class="container">
        <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card header">
        <h3>Создание поста!</h3>
        </div>
        <div class="card body">
            <div class="col-md-12">
            <form action="{{route('post.store')}}" method='post'>
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите название поста">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Описание</label>
                <textarea name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Введите описание поста"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary float col-md-12">Сохранить</button>
            </form>
            </div>
            </div>
            </div>
        @endsection