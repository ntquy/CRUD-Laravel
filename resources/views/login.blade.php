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
<div class="container" style="margin-top: 10%">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<form role="form" action="{{ url('/login') }}" method="POST">
						{!! csrf_field() !!}
						<fieldset>
							<div class="row">
								<div class="col-sm-12 col-md-10  col-md-offset-1 ">
									<div class="form-group">
										<div class="input-group">
											<span>Email</span> 
											<input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email') }}" autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span>Password</i></span>
											<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
										</div>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary" value="Đăng nhập">
									</div>
									<div class="login-help">
										<a href="#" >Đăng ký</a> - <a href="#" >Quên mật khẩu</a>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>