<div class="card">
    <img src="{{ asset('img/'.lcfirst($travel['name']).'.jpg') }}" alt="{{ $travel['name'] }}">
    <div class="layover">
        <h2>{{ $travel['name'] }}</h2>
        <p>{{ $travel['description'] }}</p>
        <h4>{{ $travel['transport'].', with '.$travel['company'] }}</h4>
        <small>{{ 'From '.$travel['departure_date'].' to '.$travel['arrival_date'] }}</small>
        <h5>{{ $travel['price'].'$' }}</h5>
    </div>
</div>