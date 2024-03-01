<h2>Ingresar nombre:</h2>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label for="nota1">nombre</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="nota2">precio</label>
        <input type="number" name="price" required>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

