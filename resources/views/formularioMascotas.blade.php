<h1>formulario para mascotas</h1>
    <form action="{{route('mascotas.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Ingrese el nombre de su mascota:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Ingrese el color:
            <br>
            <input type="text" name="price">
        </label>
        <br><br><br>

        <button type="submit">Enviar:</button>
        </form>
