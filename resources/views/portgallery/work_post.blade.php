<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>PortGallery</title>
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
                                    <a class="nav-link" href="/login">ログアウト</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">タイムライン</a>
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
                        <a href="/logout">ログアウト</a>
                        <a href="/register">タイムライン</a>
                        <a href="">使い方</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="/portfolio/post" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3 class="text-center mt-3">ポートフォリオ情報をアップロード</h3>
                    <div class="form-group">
                        <label for="name">サイト名</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="※30文字以内" required>
                    </div>
                    <div class="form-group">
                        <label for="url">アドレス</label>
                        <input type="url" class="form-control" name="url" required>
                    </div>
                    <div class="form-group">
                        <label for="image">サムネイル画像</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="text">紹介文</label>
                        <textarea class="form-control" name="text" id="text" cols="10" rows="10" placeholder="※150文字以内" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-outline-secondary btn-block" value="登録">
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="./js/app.js"></script>
</body>
</html>