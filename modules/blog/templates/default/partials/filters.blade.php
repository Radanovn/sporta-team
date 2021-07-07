@foreach($filters as $filterKey=>$filter)
    @includeIf('blog::partials.filters.' . $filter->controlType)
@endforeach
