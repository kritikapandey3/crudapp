<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Land Category</title>
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}"/>
</head>
<body>

@if(Session::has('success') || isset($_GET['success']))
    <div class="alert alert-success mt-3">{{Session::get('success') ?? $_GET['success'] }}</div>
@endif
<div class="row">
    <div class="col">
        <h1>Land Category</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-striped table-hover table-sm">
            <thead>
            <tr>
                <th>Name</th>
                <th>Weight</th>
                <th>Publish</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>

            </tr>
            </thead>

            <tbody>
            @foreach($landcategories as $landcategory)
                <tr>
                    <td>{{ $landcategory->name }}</td>
                    <td>{{ $landcategory->weight }}</td>
                    <td>{{ $landcategory->publish }}</td>
                    <td>{{ $landcategory->created_at }}</td>
                    <td>{{ $landcategory->updated_at }}</td>
                    <td>
                        <a href="{{url('landcategories/create')}}" class="btn btn-sm btn-success" >Add</a>
                        <a href="{{ url('/landcategories').'/'.$landcategory->id.'/edit' }}" class="btn btn-sm btn-primary" >Edit</a>
                        <form action="{{url('/landcategories').'/'.$landcategory->id}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm delete">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>

<script type="text/javascript" src="{{url('public/js/jquery.js')}}"></script>
<script>

    $(function () {
        $('.delete').click(function (e) {
            e.preventDefault();
            form = $(this).parent('form');

            if(confirm('Are you sure you want to delete this item?')) {
                form.submit();
            }
        });
    });
</script>

</body>
</html>
