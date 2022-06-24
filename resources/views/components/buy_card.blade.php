<li>
    <div class="img-container">
        <img src="{{ asset('images/buy-' . $item) }}" alt="{{ $key }}">
    </div>
    <div class="text">
        <a href="">{{ strtoupper(str_replace('_', ' ', $key)) }}</a>
    </div>
</li>