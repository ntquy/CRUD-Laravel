<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="container">
    <h2>Create Post</h2>
    {{ Form::open(['route' => 'post.store' , 'method' => 'post']) }}
        <div class="form-group">
            {!! Form::label('Content') !!}
            {{ Form::text('content', null, ['class' => 'form-control']) }}
        </div>
        {!! $errors->first('content', '<p class="text-danger">:message</p>') !!}
        <div class="form-group>
            {!! Form::label('Select User') !!}
            <div class="m-input-icon m-input-icon--right">
                {!! Form::select('user_id', $users, null, ['class' => 'form-control m-input']) !!}
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-default">Create</button>
    {{ Form::close() }}
    </div>
</body>
</html>