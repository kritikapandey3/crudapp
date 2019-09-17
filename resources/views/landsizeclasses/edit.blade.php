<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Land Size Class</title>
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}"/>
    <style>
        .hide{
            display:none;
        }
        .show{
            display:block;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-12 bg-white">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1>Edit Land Size Class</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="alert alert-success hide"></div>

                <form action="{{ route('landsizeclasses.update' }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $landsizeclasses->name }}">
                        <div id = "name-err" class = "alert alert-danger hide"></div>
                        @if(!empty($errors))
                            <div>
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="number">Weight</label>
                        <input type="number" name="weight" id="weight" class="form-control" value="{{$landsizeclasses->weight }}" required>
                        <div id = "email-err" class = "alert alert-danger hide"></div>
                    </div>


                    <div class="form-group">
                        <label for="landcategory_id">Land Category</label>
                        <select name="landcategory_id">
                            @foreach($data as $landcategory)
                                <option value="{{$landcategory->id}}">{{$landcategory->name}}  </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="publish">Publish</label>
                        <select name="publish">
                            <option value="1"> Enable </option>
                            <option value="0">Disable</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>

                        <div id="output"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{url('public/js/jquery.js')}}"></script>

</body>
</html>
