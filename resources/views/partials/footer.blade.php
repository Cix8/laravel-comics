<footer>
    <div class="footer_top">
        <div class="left">
            <div class="col">
                <ul>
                    <li>
                        <h3>DC COMICS</h3>
                    </li>
                    @foreach ($footer_links['dc_comics'] as $link)
                        <li>
                            <a href="">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <ul>
                    <li>
                        <h3>SHOP</h3>
                    </li>
                    @foreach ($footer_links['shop'] as $link)
                        <li>
                            <a href="">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <h3>DC</h3>
                    </li>
                    @foreach ($footer_links['dc'] as $link)
                        <li>
                            <a href="">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <ul>
                    <li>
                        <h3>SITES</h3>
                    </li>
                    @foreach ($footer_links['sites'] as $link)
                        <li>
                            <a href="">{{ $link }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="footer_bottom"></div>
</footer>
