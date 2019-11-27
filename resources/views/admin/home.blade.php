@extends('layouts.admin.index')

@section('content')



    <div class="row category-menu">

        <a href="/admin/story" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-history fa-3x"></i></div>
            Історії
        </a>
        
        <a href="/admin/news" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-newspaper-o fa-3x"></i></div>
            Новини
        </a>

        <a href="/admin/department" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-university fa-3x"></i></div>
            Відділи
        </a>

        <a href="/admin/teacher" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-users fa-3x"></i></div>
            Вчителі
        </a>

        <a href="/admin/instrument" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-music fa-3x"></i></div>
            Інструменти
        </a>

        <a href="/admin/achieve" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-bar-chart fa-3x"></i></div>
            Досягнення
        </a>

        <a href="/admin/intro" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-yelp fa-3x"></i></div>
            Вступ
        </a>

        <a href="/admin/gallery" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-picture-o fa-3x"></i></div>
            Галерея
        </a>

        <a href="/admin/contact" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-phone-square fa-3x"></i></div>
            Контакти
        </a>

        <a href="/admin/info" class="col-8 col-sm-5 col-md-3 category-items" >
            <div class="category-icon"><i class="fa fa-fw fa-info-circle fa-3x"></i></div>
            Загальна інформація
        </a>
    </div>


@endsection