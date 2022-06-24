<footer>
    <div class="footer_top">
        <div class="container">
            <div class="left">
                <div class="col">
                    <ul>
                        <li class="title">
                            <h3>DC COMICS</h3>
                        </li>
                        @foreach ($footer_links['dc_comics'] as $link)
                            <li class="link">
                                <a href="">
                                    {{ $link }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <li class="title">
                            <h3>SHOP</h3>
                        </li>
                        @foreach ($footer_links['shop'] as $link)
                            <li class="link">
                                <a href="">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li class="title">
                            <h3>DC</h3>
                        </li>
                        @foreach ($footer_links['dc'] as $link)
                            <li class="link">
                                <a href="">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <li class="title">
                            <h3>SITES</h3>
                        </li>
                        @foreach ($footer_links['sites'] as $link)
                            <li class="link">
                                <a href="">{{ $link }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="img-container">
                    <img src="{{ asset('../images/dc-logo-bg.png') }}" alt="dc logo">
                </div>
            </div>
        </div>
        <div class="credits">
            <p>All Site Contents TM and 2020 DC Entertainment, unless otherwise <a href="">nothed here</a>.All rights reserved</p>
            <a href="">Cookies Settings</a>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="left">
                <div class="btn-container">
                    <a href="">SIGN-UP NOW!</a>
                </div>
            </div>
            <div class="right">
                <div class="col">
                    <a href="">FOLLOW US</a>
                </div>
                <div class="col">
                    <ul>
                        @foreach ($footer_links["socials"] as $link)
                            <li>
                                <a href="">
                                    <img src="{{ asset('images/footer-'.$link.'.png') }}" alt="{{ $link.' logo' }}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
