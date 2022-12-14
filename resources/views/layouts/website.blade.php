<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::to('assets/css/layout-website.css') }}">
    <!-- end css -->

    <title>LinkedIn - @yield('title')</title>

</head>
<body>

    <!-- header -->
    <header>
        <nav>
            <div class="left">
                <ul>
                    <img src="{{ URL::to('assets/image/logos/logo-small.png') }}" alt="LinkedIn" title="LinkedIn">
                </ul>
                <div style="width: 1px; height: 100%; background: #F4F4F4; margin: 0 40px"></div>
                <ul>
                    <li>
                        <a href="/feed">
                            <i class="fa-solid fa-wifi"></i>
                            <span>FEED</span>
                        </a>
                    </li>
                    <li>
                        <a href="/network">
                            <i class="fa-solid fa-users"></i>
                            <span>NETWORK</span>
                        </a>
                    </li>
                    <li>
                        <a href="/jobs">
                            <i class="fa-solid fa-briefcase"></i>
                            <span>JOBS</span>
                        </a>
                    </li>
                    <li>
                        <a href="/chat">
                            <i class="fa-regular fa-comment"></i>
                            <span>CHAT</span>
                        </a>
                    </li>
                    <li>
                        <a href="/notices">
                            <i class="fa-regular fa-bell"></i>
                            <span>NOTES</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right">
                <div style="width: 1px; height: 100%; background: #F4F4F4"></div>
                <div class="profile">
                    <img src="{{ URL::to('assets/image/logos/logo-small.png') }}" alt="">
                    <div>
                        <p class="m-auto">Olá</p>
                        <p><strong>Wesley Alves</strong></p>
                    </div>
                </div>
                <div style="width: 1px; height: 100%; background: #F4F4F4"></div>
                <div class="settings">
                    <p>Other</p>
                </div>
                <div style="width: 1px; height: 100%; background: #F4F4F4"></div>
            </div>
        </nav>
    </header>
    <!-- end header -->

    <!-- content -->
    <main>
        @yield('content')
    </main>
    <!-- end content -->

    <!-- footer -->
    <footer></footer>
    <!-- end footer -->

    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- end js -->

</body>
</html>
