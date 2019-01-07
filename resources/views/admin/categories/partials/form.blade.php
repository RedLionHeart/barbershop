<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if($category->published == 1) selected="" @endif>Опубликовано></option>
        @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$category->category_name or ""}}" required=''>
<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$category->slug or ""}}" readonly=''>
<label for="">ID категории</label>
<input type="text" class="form-control" name="category_id" placeholder="ID категории" value="{{$category->category_id or ""}}" >
<label for="">Имя производителя</label>
<input type="text" class="form-control" name="maker_name" placeholder="maker" value="{{$category->maker_id or ""}}" >
<label for="">Родительская категория</label>
<select name="parent_id" id="" class="form-control">
    <option value="0">-- без родительской категории --</option>
    @include('admin.categories.partials.categories',['categories' =>$categories])
</select>

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">