<li class="card_comics">
    <div class="card_img">
        <img src="{{ $single_data['thumb'] }}" alt="{{ $single_data['title'] }}">
    </div>
    <ul class="card_info">
        @foreach ($single_data as $key => $single_value)
            @if ($key !== 'thumb' && $key !== 'artists' && $key !== 'writers')
                <li>
                    <strong>{{ ucfirst(str_replace("_", " ", $key)) }}:</strong>
                    <span>{{ ucfirst($single_value) }}</span>
                </li>
            @endif
        @endforeach
    </ul>
</li>
