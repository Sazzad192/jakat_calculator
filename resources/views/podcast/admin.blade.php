<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <td>cat_id</td>
                <td>cat_type</td> 
                <td>cat_name</td> 
                <td>cat_name_bn</td>
                <td>cat_slug</td> 
                <td>cat_title</td>
                <td>img_icon_path</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($contents as $item)
                <tr>
                    
                    <td>{{$item->cat_type}}</td>
                    <td>{{$item->cat_name}}</td>
                    <td>{{$item->cat_name}}</td>
                    <td>{{$item->cat_name_bn}}</td>
                    <td>{{$item->cat_slug}}</td>
                    <td>{{$item->cat_title}}</td>
                    <td>{{$item->img_icon_path}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>