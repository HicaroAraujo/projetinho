<form action="{{ url('carros') }}" method="POST">
    @csrf
    <div>
         <label for="name">Ano</label>
        <input type="text" name="name" placeholder="name" required>
    </div>
    
    <button type="submit">Create Dono</button>
</form>