@extends('admin.content')

@section('content')
    <div class="content-wrapper">

        <section class="content container-fluid">
            @component('admin.components.breadcrumb')
                @slot('title') Редактирование товара @endslot
                @slot('parent') Главная @endslot
                @slot('active') Товары @endslot
            @endcomponent

            <hr>
            <div class="form-group">
                <form action="{{route('admin.products.update', $product)}}" class="form-gorizontal" method="post">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                    @include('admin.products.partials.form')
                </form>

            </div>



        </section>
    </div>
@endsection