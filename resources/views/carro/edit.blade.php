<form action="{{ url('carros/'.$carro->id) }}" method="POST">
    @method ('PUT')
    @csrf
    <div>
         <label for="year">Ano</label>
        <input type="text" name="year" placeholder="year" value="{{$carro->year}}" required>
    </div>
   
    <div>
        <label for="model">modelo</label>
        <input type="text" name="model" placeholder="model" value="{{$carro->model}}" required>
    </div>

    <div>
        <label for="brand">modelo</label>
        <input type="text" name="brand" placeholder="brand" value="{{$carro->brand}}" required>
    </div>
    
    <button type="submit">update Carro</button>
</form>