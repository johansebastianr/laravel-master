<h1>formulario producto</h1>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Ingrese el nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Ingrese el precio: :
            <br>
            <input type="number" name="price">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
        </form>
