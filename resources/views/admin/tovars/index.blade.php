@extends('admin.content')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->


            <!-- /.content -->

            <div class="container">
                @component('admin.components.breadcrumb')
                    @slot('title') Список товаров @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Товары @endslot
                @endcomponent
<div>
                <hr>





    </section>
    </div>
    <!-- /.content-wrapper -->
@endsection