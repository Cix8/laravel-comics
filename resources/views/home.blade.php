<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    @include('partials.header')

    <main>
        <div class="banner"></div>
        <div class="main-contents">
            <div class="container">
                <div class="title">
                    <h2>CURRENT SERIES</h2>
                </div>
                <div class="contents">
                    <ul>
                        @foreach ($series_data as $single_data)
                            <li class="card">
                                <div class="card_img">
                                    <img src="{{ $single_data["thumb"] }}" alt="{{ $single_data["title"] }}">
                                </div>
                                <div class="card_title">
                                    <h3>
                                        {{ $single_data["title"] }}
                                    </h3>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>

</body>
</html>