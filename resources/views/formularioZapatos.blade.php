<h2>Ingresar nombre:</h2>

    <form action="{{ route('zapatos.store') }}" method="POST">
        @csrf
        <label for="nota1">Marca:</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="nota2">Talla</label>
        <input type="number" name="price" required>
        <br><br>

        <button type="submit">Enviar</button>
    </form>
