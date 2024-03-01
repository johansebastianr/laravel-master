<h2>Promedio de notas:</h2>

    <form action="{{ route('promedio.store') }}" method="POST">
        @csrf
        <label for="nota1">Ingrese la primera nota:</label>
        <input type="number" name="nota1" required>
        <br><br>

        <label for="nota2">Ingrese la segunda nota:</label>
        <input type="number" name="nota2" required>
        <br><br>

        <label for="nota3">Ingrese la tercera nota:</label>
        <input type="number" name="nota3" required>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    @if(isset($sumatoria))
        <p>El promedio de las tres notas es {{ $sumatoria }}</p>
    @endif

