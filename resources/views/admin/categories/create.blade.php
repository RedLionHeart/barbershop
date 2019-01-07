@extends('admin.content')

@section('content')
    <div class="content-wrapper">

        <section class="content container-fluid">
           @component('admin.components.breadcrumb')
                @slot('title') Создать категорию @endslot
                @slot('parent') Главная @endslot
                @slot('active') Категории @endslot
            @endcomponent

            <hr>
            <div class="form-group">
                <form action="{{route('admin.category.store')}}" class="form-gorizontal" method="post">
                    {{csrf_field()}}
                    @include('admin.categories.partials.form')
                </form>

            </div>



        </section>
    </div>
    @endsection