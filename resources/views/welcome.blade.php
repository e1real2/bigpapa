<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/caurosel.css') }}">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/semantic/semantic.min.js') }}"></script>
    <title>Big Papa</title>
</head>
<style>

</style>
<style type="text/css">
    .hidden.menu {
        display: none;
    }

    .masthead.segment {
        min-height: 700px;
        padding: 1em 0em;
    }

    .masthead .logo.item img {
        margin-right: 1em;
    }

    .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
    }

    .masthead h1.ui.header {
        margin-top: 3em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: normal;
    }

    .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
    }

    .ui.vertical.stripe {
        padding: 8em 0em;
    }

    .ui.vertical.stripe h3 {
        font-size: 2em;
    }

    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
        margin-top: 3em;
    }

    .ui.vertical.stripe .floated.image {
        clear: both;
    }

    .ui.vertical.stripe p {
        font-size: 1.33em;
    }

    .ui.vertical.stripe .horizontal.divider {
        margin: 3em 0em;
    }

    .quote.stripe.segment {
        padding: 0em;
    }

    .quote.stripe.segment .grid .column {
        padding-top: 5em;
        padding-bottom: 5em;
    }

    .footer.segment {
        padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
        display: none;
    }

    @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
            display: none !important;
        }

        .secondary.pointing.menu .item,
        .secondary.pointing.menu .menu {
            display: none;
        }

        .secondary.pointing.menu .toc.item {
            display: block;
        }

        .masthead.segment {
            min-height: 350px;
        }

        .masthead h1.ui.header {
            font-size: 2em;
            margin-top: 1.5em;
        }

        .masthead h2 {
            margin-top: 0.5em;
            font-size: 1.5em;
        }
    }
</style>
<script>
    $(document)
        .ready(function () {
            // fix menu when passed
            $('.masthead')
                .visibility({
                    once: false,
                    onBottomPassed: function () {
                        $('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function () {
                        $('.fixed.menu').transition('fade out');
                    }
                })
            ;
            // create sidebar and attach to menu open
            $('.ui.sidebar')
                .sidebar('attach events', '.toc.item')
            ;

        })
</script>
<body>
<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
    <div class="ui container">
        <a class="active item">Главная</a>
        <a class="item">Галерея</a>
        <a class="item">Изготовление мебели</a>
        <div class="right menu">
        </div>
    </div>
</div>
<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Главная</a>
    <a class="item">О нас</a>
    <a class="item">Услуги</a>
</div>
<div class="pusher">
    <div class="ui vertical masthead center aligned segment" style="background: rgba(0,0,0,.87)">

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>
                <a class="active item">Главная</a>
                <a class="item">О нас</a>
                <a class="item">Услуги</a>
                <div class="ui language floating dropdown link item" id="languages">
                    <i class="world icon"></i>
                    <div class="text">Русский</div>
                    <div class="menu transition hidden">
                        <div class="header">Search Languages</div>
                        <div class="ui icon search input">
                            <i class="search icon"></i>
                            <input type="text" placeholder="Search languages...">
                        </div>
                        <div class="scrolling menu">
                            <div class="item" data-percent="6" data-value="ja" data-english="Japanese">
                                <span class="description">日本語</span>
                                Japanese
                            </div>
                            <div class="item" data-percent="0" data-value="ro" data-english="Romanian">
                                <span class="description">românește</span>
                                Romanian
                            </div>
                        </div>

                    </div>
                </div>
                <div class="right item">

                </div>
            </div>
        </div>
        <div class="ui vertical stripe segment" style="background: #F1B435;height: 600px;">

            <div class="ui middle aligned stackable grid container">
                <div class="carousel">
                    <input type="checkbox" class="faux-ui-facia">
                    <div class="slide" slide="5" annot="This is the fifth slide title. Photo by David Marcu.">
                        <img src="https://ununsplash.imgix.net/uploads/141223808515744db9995/3361b5e1?q=75&fm=jpg&w=300"
                             alt="Slide 5">
                    </div>


                    <input type="checkbox" class="faux-ui-facia">
                    <div class="slide" slide="4" annot="This is the fourth slide title. Photo by Ryan Lum.">
                        <img src="https://unsplash.imgix.net/photo-1415356838286-df6fd593e8b3?q=75&fm=jpg&w=300"
                             alt="Slide 4">
                    </div>

                    <input type="checkbox" class="faux-ui-facia">
                    <div class="slide" slide="3" annot="This is the third slide title. Photo by Tomasz Paciorek.">
                        <img src="https://ununsplash.imgix.net/reserve/JaI1BywIT5Or8Jfmci1E_zakopane.jpg?q=75&fm=jpg&w=300"
                             alt="Slide 3">
                    </div>

                    <input type="checkbox" class="faux-ui-facia">
                    <div class="slide" slide="2" annot="This is the second slide title. Photo by S Charles.">
                        <img src="https://ununsplash.imgix.net/uploads/1413387158190559d80f7/6108b580?fit=crop&fm=jpg&q=75&w=300"
                             alt="Slide 2">
                    </div>

                    <input type="checkbox" class="faux-ui-facia">

                    <div class="slide" slide="1" annot="First slide title. Photo by Forrest Cavale.">
                        <img src="https://ununsplash.imgix.net/uploads/1413399939678471ea070/2c0343f7?q=75&fm=jpg&w=301"
                             alt="Slide 1">
                    </div>

                    <div class="counter" count="5"> / 5</div>

                </div>
            </div>
            <div class="ui basic modal call-modal">
                <div class="ui icon header">
                    <i class="phone icon"></i>
                    Обратный звонок
                </div>
                <div class="content">
                    <form class="ui form">
                        <div class="field">
                            <label>Имя</label>
                            <input type="text" name="first-name" placeholder="Имя">
                        </div>
                        <div class="field">
                            <label>Телефон</label>
                            <input type="number" name="last-name" placeholder="Телефон">
                        </div>
                    </form>
                </div>
                <div class="actions">
                    <div class="ui red basic cancel inverted button">
                        <i class="remove icon"></i>
                        No
                    </div>
                    <div class="ui green ok inverted button">
                        <i class="checkmark icon"></i>
                        Yes
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

</body>
<style>
    .ui.secondary.inverted.pointing.menu {
        border: 0;
        border-radius: 0;
    }

    .carousel-image {
        width: 450px;
        height: 500px;
    }

</style>
<script>

</script>
</html>
