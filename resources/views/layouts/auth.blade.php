<!DOCTYPE html>
<html lang="en, pt-br">
<head>

    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- end meta tags -->

    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::to('assets/css/auth-layout.css') }}">
    <!-- end css -->

    <title>LinkedIn - @yield('title')</title>
</head>
<body>

    <header>
        <div class="container">
            <img src="{{ URL::to('assets/image/logos/logo-white.png') }}" alt="Linkedin" title="Linkedin">
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <img src="{{ URL::to('assets/image/logos/logo-large.png') }}" alt="Linkedin" title="Linkedin">
                </div>

                <div class="col-md-6">
                    <p><strong>Navigation</strong></p>
                    <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">advertising</a>
                                </li>
                                <li>
                                    <a href="#">Small Business</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="#">Talent Solutions</a>
                                </li>
                                <li>
                                    <a href="#">Marketing Solutions</a>
                                </li>
                                <li>
                                    <a href="#">Sales Solutions</a>
                                </li>
                                <li>
                                    <a href="#">Safe Center</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>
                                    <a href="#">Community Guidelines</a>
                                </li>
                                <li>
                                    <a href="#">Privacy & Terms</a>
                                </li>
                                <li>
                                    <a href="#">Mobile App</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <p><strong>Fast access</strong></p>
                    <div class="btn-area">
                        <div class="button-custom custom-primary">
                            <a href="#">Questions? <span><i class="fa-regular fa-circle-question"></i></span></a>
                        </div>
                        <div class="button-custom custom-secondary">
                            <a href="#">Settings <span><i class="fa-solid fa-gear"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <p><strong>Languages</strong></p>
                    <select name="languages" id="languages" class="form-control">
                        <option value="en">English</option>
                        <option value="pt">Português</option>
                    </select>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
