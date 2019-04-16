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
                    @slot('active') Заказы @endslot
                @endcomponent
            </div>
            <hr>
            <table class="table table-striped table-bordered">

                <thead>
                <th>ID заказа</th>
                <th>Имя</th>
                <th>Сумма заказа</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Вид оплаты</th>
                <th>Комментарий к заказу</th>
                <th>Статус заказа</th>
                <th class="text-right">Действие</th>
                </thead>
                <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->value.' руб.'}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->client_email}}</td>
                        <td>
                        {{($order->cash == 'nal') ? 'Наличные' : 'Безналичные'}}
                        </td>
                        <td>{{$order->comment}}</td>

                        <form action="{{route('admin.orders.update', $order)}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field() }}
                        <td>
                            <select name="status">
                                <option value="default" @if($order->status == 'default') selected="" @endif>В работе</option>
                                <option value="success" @if($order->status == 'success') selected="" @endif>Выполнен</option>
                            </select>
                        </td>

                        <td class="text-right" style="position: relative;float: left;">

                            <button type="submit" class="btn btn-success "><i class="fa fa-floppy-o"></i></button>

                            </form>

                            <form onsubmit="return confirm('Удалить?')" action="{{route('admin.orders.destroy', $order)}}" method="post" style="position: absolute; top:15%; left:90%">
                                <input type="hidden" name="_method" value="DELETE">
                                {{csrf_field() }}
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
                            {{$orders->links()}}

                        </ul>

                    </td>
                </tr>
                </tfoot>

            </table>




        </section>
    </div>
    <!-- /.content-wrapper -->
@endsection