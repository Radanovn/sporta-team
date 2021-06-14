@foreach($filters as $filterKey=>$filter)
    @include('blog::partials.filters.' . $filter->controlType)
@endforeach
