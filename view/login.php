<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>404NotFound</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
    />
    <link
      rel="shortcut icon"
      href="./images/favicon.ico"
    />
    <link rel="stylesheet" href="./login.css" />
  </head>
  <body>
  
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Tạo tài khoản</h1>
			<input type="text" placeholder="Tên tài khoản" />
			<input type="text" placeholder="Họ và tên" />
			<input type="text" placeholder="Số điện thoại" />
			<input type="text" placeholder="Thành phố bạn đang ở" />
			<input type="password" placeholder="Mật khẩu" />
			<button>Đăng ký</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Đăng nhập</h1>
			
			<input type="text" placeholder="Nhập tài khoản" />
			<input type="password" placeholder="Nhập mật khẩu" />
			<a href="#">Quên mật khẩu</a>
			<button>Đăng nhập</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Chào bạn !</h1>
				<p>Nếu bạn đã có tài khoản, hãy quay lại đăng nhập vào nào.</p>
				<button class="ghost" id="signIn">Đăng nhập</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Chào bạn !</h1>
				<p>Hãy tạo tài khoản và bước đến với chúng tối</p>
				<button class="ghost" id="signUp">Đăng ký</button>
			</div>
		</div>
	</div>
</div>


  </body>
  <script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
    signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

  </script>
</html>
