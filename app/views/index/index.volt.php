<html>
<head>
    <title>Some amazing website</title>

    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <?= $this->assets->outputCss() ?>
    <?= $this->assets->outputInlineCss() ?>

</head>

<body>

<div id="wrapper">

    <div class="headerWidget ">

        <nav class="navbar navbar-expand-sm  navbar-dark " id="headerTopRow">

            <div id="logo">
                <a href="" >
                    <img src="img/2.jpg" id="logoImage">
                </a>
            </div>

            <div class="input-group " id="searchbar">

                <div class="input-group-prepend rtl">
                    <button class="btn btn-outline-info rtl" type="button" id="searchbarButton">
                        <i class="fas fa-search"></i></button>
                </div>

                <input type="text" class="form-control rtl" placeholder="Some text"  id="searchbarInput">

            </div>

            <div class="dropdown " id="login" >
                <button type="button rtl" class="btn btn-primary ilya-btn-general " data-toggle="dropdown" id="loginButton">
                    <div id="loginTitle">ورود/ثبت نام</div>
                    <i class="fas fa-angle-down"></i>
                </button>
                <div class="dropdown-menu rtl " >
                    <a class="dropdown-item" href="#">Link 1</a>
                    <a class="dropdown-item" href="#">Link 2</a>
                    <a class="dropdown-item" href="#">Link 3</a>
                </div>
            </div>
            <p id="divider">|</p>

            <i src=""></i>

            <div >
                <a href="" class="btn btn-sm btn-secondary ilya-btn-general " role="button">
                    سبد خرید
                </a>
            </div>

        </nav>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Navbar</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">تجهیزات آزمایشگاهی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مواد شیمیایی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">مقالات و اخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تأمین کنندگان</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تعرفه ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>


    <div class="ilyaMainRow row">

        <div class="mainWidget col-sm-8">

        </div>
        <div class="rightSidebarWidget col-sm-4">

        </div>

    </div>

    <div class="ilyaNewsRow row">
        <div class="col-sm-4 newsItem1">
            <a href="" class="NewsItemlink">
                <img src="img/2.jpg" alt="" class="newsItemImg">
            </a>
            <div class="newsItemText rtl">
                <p class="newsItemTextp rtl"> heello </p>
            </div>
        </div>
        <div class="col-sm-4 newsItem2"></div>
        <div class="col-sm-4 newsItem3"></div>

    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<?= $this->assets->outputJs() ?>

</body>

</html>