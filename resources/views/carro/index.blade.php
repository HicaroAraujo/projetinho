@foreach($carros as $carro)
    <div>
        <h3>{{ $carro->year }}</h3>
        <p>{{ $carro->model }}</p>
        <p>{{ $carro->brand }}</p>
        <a href="{{ url('carros/'.$carro->id.'/edit') }}">Edit</a>
        <form action="{{ url('carros/'.$carro->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach