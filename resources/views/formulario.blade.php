
<h2>Verificar Número Primo</h2>

    <form action="{{ route('curso.store') }}" method="POST">
        @csrf
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    @if(isset($mensaje))
        <p>{{ $mensaje }}</p>
    @endif

