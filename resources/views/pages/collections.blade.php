@extends('layouts.main', ['title' => 'باكر نيوز - حوادث ومنوعات'])

@section('content')
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__url">الرئيسية</a>
                <i class="ui-arrow-left"></i>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
                حوادث ومنوعات
            </li>
        </ul>
    </div>
    <div class="main-container container" id="main-container">
        <div class="row">
            <div class="col-lg-10 m-auto blog__content mb-72">
                <h1 class="page-title">حوادث ومنوعات</h1>
                
                @livewire( 'post', ['type_id' => 5] )

            </div>
        </div>
    </div>
@endsection
