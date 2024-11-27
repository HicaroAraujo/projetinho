<form action="{{ url('carros') }}" method="POST">
    @csrf
    <div>
         <label for="year">Ano</label>
        <input type="text" name="year" placeholder="year" required>
    </div>
   
    <div>
        <label for="model">modelo</label>
        <input type="text" name="model" placeholder="model" required>
    </div>

    <div>
        <label for="brand">brand</label>
        <input type="text" name="brand" placeholder="brand" required>
    </div>
    
    <button type="submit">Create Carro</button>
</form>