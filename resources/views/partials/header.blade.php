<header class="header">
    <div class="header_top">
        <div class="contents">
            <ul>
                <li>
                    <strong>DC POWER VISA</strong>
                </li>
                <li>
                    <strong>ADDITIONAL DC SITES</strong>
                </li>
            </ul>
        </div>
    </div>
    <div class="header_contents">
        <div class="logo-container">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul>
                @foreach ($header_links as $link)
                    <li>
                        <a href="">{{ $link }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="search-container">
                <input type="search" name="search" id="search" placeholder="Search">
                <label for="search">
                    <i class="fas fa-search"></i>
                </label>
            </div>
        </nav>
    </div>
</header>
