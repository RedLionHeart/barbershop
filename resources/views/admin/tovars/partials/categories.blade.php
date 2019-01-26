@foreach($categories as $category)
    <option value="{{$category->id or ''}}"
    @isset($tovar->id)
        @foreach ($tovar->categories as $category_tovar)
            @if($category->id == $category_tovar->id)
                selected="selected"
            @endif
            @endforeach
            @endisset
    >
        {!! $delimiter or "" !!}{{$category->category_name or ""}}
    </option>

    @if(count($category->children)>0)
        @include('admin.tovars.partials.categories',[
        'categories' =>$tovar->children,
        'delimiter'=>' - ' .$delimiter
        ])
    @endif
@endforeach