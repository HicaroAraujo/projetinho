<form action="{{ url('donos/'.$dono->id) }}" method="POST">
    @method ('PUT')
    @csrf
    <div>
         <label for="name">Ano</label>
        <input type="text" name="name" placeholder="name" value="{{$dono->name}}" required>
    </div>
   
  
    
    <button type="submit">update Carro</button>
</form>