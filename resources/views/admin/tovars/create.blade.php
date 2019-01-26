@extends('admin.content')

@section('content')
    <div class="content-wrapper">

        <section class="content container-fluid">
            @component('admin.components.breadcrumb')
                @slot('title') Создать товар @endslot
                @slot('parent') Главная @endslot
                @slot('active') Товары @endslot
            @endcomponent

            <hr>
            <div class="form-group">
                <form action="{{route('admin.tovars.store')}}" class="form-gorizontal" method="post">
                    {{csrf_field()}}
                    @include('admin.tovars.partials.form')
                </form>

            </div>



        </section>
    </div>
@endsection