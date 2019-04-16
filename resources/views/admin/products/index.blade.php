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
            </div>
                <hr>
    <a href="{{route('admin.products.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square"></i> Создать товар</a>
    <table class="table table-striped table-bordered">

        <thead>
        <th>Наименование</th>
        <th>ID категории</th>
        <th>Стоимость</th>
        <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse ($products as $product)
            <tr>
                <td>{{$product->title}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->value.' руб.'}}</td>
                <td class="text-right">
                    <form onsubmit="return confirm('Удалить?')" action="{{route('admin.products.destroy', $product)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field() }}
                        <a href="{{route('admin.products.edit', $product)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                    </form>

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
                    {{$products->links()}}

                </ul>

            </td>
        </tr>
        </tfoot>

    </table>




    </section>
    </div>
    <!-- /.content-wrapper -->
@endsection