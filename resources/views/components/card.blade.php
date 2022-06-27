<li class="card">
    <a href="{{ route('comics_info', ['id' => $single_data['id']]) }}" class="info-link">
        <div class="card_img">
            <img src="{{ $single_data['thumb'] }}" alt="{{ $single_data['title'] }}">
        </div>
        <div class="card_title">
            <h3>
                {{ $single_data['series'] }}
            </h3>
        </div>
    </a>
</li>