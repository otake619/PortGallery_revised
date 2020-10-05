<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>ログイン/PortGallery</title>
</head>
<body>
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="header">
                    <!--Navbar-->
                    <nav class="navbar navbar-light blue lighten-4">

                        <!-- Navbar brand -->
                        <a class="navbar-brand font-weight-bold" href="#">PortGallery</a>
                    
                        <!-- Collapse button -->
                        <button class="navbar-toggler toggler-example blue darken-3" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent41" aria-controls="navbarSupportedContent41" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="white-text"><i class="fas fa-bars fa-1x"></i></span></button>
                    
                        <!-- Collapsible content -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent41">
                    
                        <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">お知らせ<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">ログイン</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">新規登録</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">使い方</a>
                                </li>
                            </ul>
                        <!-- Links -->
                    
                        </div>
                        <!-- Collapsible content -->
                    
                    </nav>
                    <!--/.Navbar-->
                    <div class="header-link">
                        <p class="brand" href="#">PortGallery</p>
                        <a href="">お知らせ</a>
                        <a href="/login">ログイン</a>
                        <a href="/register">新規登録</a>
                        <a href="">使い方</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12 mt-5">
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror mb-5" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror mb-5" name="password" required autocomplete="current-password" placeholder="パスワード">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        {{ __('ログイン') }}
                    </button>
                    <a href="{{ route('register') }}">{{ __('新規登録') }}</a><br />
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('パスワードを忘れた場合') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="./js/app.js"></script>
</body>
</html>