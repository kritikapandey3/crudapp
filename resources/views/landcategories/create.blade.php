<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Land Category</title>
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}"/>
    <style>
        .hide{
            display:none;
        }
    </style>

</head>

<body>
<div class="row">
    <div class="col-12 bg-white">
        <div class="row">
            <div class="col-6 mx-auto mt-3">
                <h1>Add Land Category</h1>
            </div>

        </div>
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="{{ url('landcategories') }}" method="post">

                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" >
                        <div id="name-err" class="alert alert-danger hide"></div>
                        @if(!empty($errors))
                            <div>
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="number" name="weight" id="weight" class="form-control" >
                        <div id="weight-err" class="alert alert-danger hide"></div>
                        @if(!empty($errors))
                            <div>
                                {{ $errors->first('weight') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="publish">Publish</label>
                        <select name="publish">
                            <option value="1"> Enable </option>
                            <option value="0">Disable</option>
                        </select>
                    </div>
                    @if(!empty($errors))
                        <div>
                            {{ $errors->first('publish') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit">Save</button>
                </div>

                <div>
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
                </form>
               
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{url('public/js/jquery.js')}}"></script>

</body>
</html>