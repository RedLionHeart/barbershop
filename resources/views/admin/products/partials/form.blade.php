<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($product->id))
        <option value="0" @if($product->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if($product->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">ID</label>
<input type="text" class="form-control" name="id" placeholder="id" value="{{$product->id or ''}}">

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$product->title or ""}}" required=''>

<label for="">Подописание</label>
<input type="text" class="form-control" name="small_title" placeholder="Подзаголовок категории" value="{{$product->small_title or ""}}" required=''>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$product->slug or ""}}" readonly=''>

<label for="">ID категории</label>
<input type="text" class="form-control" name="category_id" placeholder="ID категории" value="{{$product->category_id or ""}}" >
<label for="">ID производителя</label>
<input type="text" class="form-control" name="maker_id" placeholder="maker" value="{{$product->maker_id or ""}}" >
<label for="">Стоимость товара</label>
<input type="text" class="form-control" name="value" placeholder="Стоимость" value="{{$product->value or ""}}" >
<label for="">Путь картинки</label>
<input type="text" class="form-control" name="pict_way" placeholder="Picture" value="{{$product->pict_way or ""}}" >

<label for="">Наличие</label>
<input type="text" class="form-control" name="available" placeholder="Наличие" value="{{$product->available or ""}}" >

<label for="">Описание</label>
<textarea name="description" id="description" class="form-control">{{$product->description or ''}}</textarea>

<label for="">ID производителя</label>
<input type="text" class="form-control" name="maker_id" placeholder="maker" value="{{$product->maker_id or ""}}" >

<label for="">Артикул</label>
<input type="text" class="form-control" name="articul" placeholder="артикул" value="{{$product->articul or ""}}" >

<label for="">Родительская категория</label>
<select name="categories[]" multiple="" class="form-control">
    @include('admin.products.partials.categories',['categories' =>$categories])
</select>

<hr />
<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$product->meta_title or ""}}" >

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$product->meta_description or ""}}" >

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$product->meta_keyword or ""}}" >

<hr />

<input class="btn btn-success" type="submit" value="Сохранить">
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>