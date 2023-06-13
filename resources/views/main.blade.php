@extends('layouts.index')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <div id="page-content-wrapper" style="margin-top: 100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Добро пожаловать на онлайн парковку</h1>
                    <p>
                        Вы можете посмотреть свой(и) автомобиль(и) онлайн.
                    </p>
                    <p>
                        Если вы ни разу не были у нас и хотите забронировать место для своего(их) автомобиля(ей),
                        то вы можете нажать на кнопку ниже этого текста.
                    </p>
                    <a href="{{route('users.create')}}" class="btn btn-secondary">
                        Добавить клиента
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

