@extends('admin.content')
<!-- Content Wrapper. Contains page content -->
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content container-fluid">

            <!--------------------------
              | Your Page Content Here |
              -------------------------->


            <!-- /.content -->


                @component('admin.components.breadcrumb')
                    @slot('title') Список категорий @endslot
                    @slot('parent') Главная @endslot
                    @slot('active') Категории @endslot
                @endcomponent

                <hr>

                <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Создать категорию</a>
                <table class="table table-striped table-bordered">

                    <thead>
                    <th>Наименование</th>
                    <th>Товар</th>
                    <th class="text-right">Действие</th>
                    </thead>
                    <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->maker_name}}</td>
                            <td>
                                <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                        </tr>
                    @endforelse
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3">
                            <ul class="pagination pull-right">
                                {{$categories->links()}}

                            </ul>

                        </td>
                    </tr>
                    </tfoot>

                </table>


    </section>
    <!-- /.content-wrapper -->
    </div>
@endsection