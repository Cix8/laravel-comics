<li class="card_comics">
    <div class="card_img">
        <img src="{{ $single_data['thumb'] }}" alt="{{ $single_data['title'] }}">
    </div>
    <ul class="card_info">
        @foreach ($single_data as $key => $single_value)
            @if ($key !== 'thumb' && gettype($single_value) !== 'array')
                <li>
                    <strong>{{ ucfirst(str_replace("_", " ", $key)) }}:</strong>
                    <span>{{ ucfirst($single_value) }}</span>
                </li>
            @elseif ($key !== 'thumb' && gettype($single_value) === 'array')
                <li>
                    <strong>{{ ucfirst(str_replace("_", " ", $key)) }}:</strong>
                    <span>{{ implode(", ", array_slice($single_value, 0, 5)) }}</span>
                </li>
            @endif
        @endforeach
    </ul>
</li>
