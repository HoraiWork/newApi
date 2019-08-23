<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">

        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th  class="text-center">Id</td>
                <th  class="text-left">Group id</td>
                <th  class="text-left">Category</td>
                <th  class="text-left">Locale</td>
                <th  class="text-right">Robots id</td>
                <th  class="text-right">Is promoted</td>
                <th  class="text-right">Is_in_stock</td>
                <th  class="text-right">status_id</td>
                <th  class="text-right">min_price</td>
                <th  class="text-right">name</td>
                <th  class="text-right">meta_title</td>
{{--                <th  class="text-right">meta_description</td>--}}
{{--                <th  class="text-right">description</td>--}}
{{--                <th  class="text-right">seo_description</td>--}}
{{--                <th  class="text-right">created_at</td>--}}
{{--                <th  class="text-right">updated_at</td>--}}
            </tr>
            </thead>
            <tbody>
        @foreach($groups as $group)
                <tr>
                    <th >{{ $group->id }}</td>
                    <th >{{ $group->group_id }}</td>
                    <th>{{ $group->category_id }}</th>
                    <th>{{ $group->locale }}</th>
                    <th>{{ $group->robots_id }}</th>
                    <th>{{ $group->is_promoted }}</th>
                    <th>{{ $group->is_in_stock }}</th>
                    <th>{{ $group->status_id }}</th>
                    <th>{{ $group->min_price }}</th>
                    <th>{{ $group->slug }}</th>
                    <th>{{ $group->name }}</th>
                    <th>{{ $group->meta_title }}</th>
{{--                    <th>{{ $group->meta_description }}</th>--}}
{{--                    <th>{{ $group->description }}</th>--}}
{{--                    <th>{{ $group->seo_description }}</th>--}}
{{--                    <th>{{ $group->created_at }}</th>--}}
{{--                    <th>{{ $group->updated_at }}</th>--}}
                </tr>


{{--            'id' => $group->id,--}}
{{--            'group_id' => $group->group_id,--}}
{{--            'category_id' => $group->category_id,--}}
{{--            'locale' => $group->locale,--}}
{{--            'robots_id' => $group->robots_id,--}}
{{--            'is_promoted' => $group->is_promoted,--}}
{{--            'is_in_stock' => $group->is_in_stock,--}}
{{--            'status_id' => $group->status_id,--}}
{{--            'min_price' => $group->min_price,--}}
{{--            'slug' => $group->slug,--}}
{{--            'name' => $group->name,--}}
{{--            'meta_title' => $group->meta_title,--}}
{{--            'meta_description' => $group->meta_description,--}}
{{--            'description' => $group->description,--}}
{{--            'seo_description' => $group->seo_description,--}}
{{--            'created_at' => $group->created_at,--}}
{{--            'updated_at' => $group->updated_at,--}}
        @endforeach
            </tbody>
        </tabele>
    </div>
</div>
</body>
</html>
