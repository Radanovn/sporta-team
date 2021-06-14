@foreach($categories as $category)

    @php
        $randIdForCheck = uniqid();
    @endphp
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="{{$randIdForCheck}}" checked name="category[]" value="{{$category->id}}">
            <label class="custom-control-label" for="{{$randIdForCheck}}">
                {{$category->title}}
            </label>
        </div>
    </div>

    @if($category->children()->count() > 0)
        @include('blog::partials.categories_children', ['categories' => $category->children])
    @endif

@endforeach
