<h3>Crear</h3>
<form action="{{ route('jugadores.store') }}" method="post">
    
    @csrf

    <label for="">Nombre:</label><br>
    <input type="text" name="Nombre">
    <br><br>

    <label for="">Tiempo:</label><br>
    <input type="number" name="Tiempo" value=0>
    <br><br><br>

    <button>...Save...</button>
</form>