<h2>Números amigos:</h2>

<form action="{{ route('amigo.store') }}" method="POST">
    @csrf
    <label for="numero1">Ingrese el primer número:</label>
    <input type="number" name="numero1" required>
    <br><br>
    <label for="numero2">Ingrese el segundo número:</label>
    <input type="number" name="numero2" required>
    <br><br>
    <button type="submit">Verificar</button>
</form>

@if(isset($mensaje))
    <p>{{ $mensaje }}</p>
@endif
