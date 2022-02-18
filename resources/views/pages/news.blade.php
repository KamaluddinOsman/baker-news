@extends('layouts.main', ['title' => 'باكر نيوز - أخبار'])

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{ route('home') }}" class="breadcrumbs__url">الرئيسية</a>
                <i class="ui-arrow-left"></i>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                أخبار
            </li>
        </ul>
    </div>
    <div class="main-container container" id="main-container">
        <div class="row">
            <div class="col-lg-10 m-auto blog__content mb-72">
                <h1 class="page-title">أخبار</h1>
                
                @livewire( 'post', ['type_id' => 1] )
                
            </div>
        </div>
    </div>
@endsection
