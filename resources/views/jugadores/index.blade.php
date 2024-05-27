<h2>Jugadores</h2>
<table>
    <thead>
        <tr>
            <th>
                <center>Nombres</center>
            </th>
            <th>
                <center>Segundos</center>
            </th>
            <th>
                <center>Acción</center>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $player)
            <tr>
                <td>
                    <center>
                        {{ $player->Nombre }}
                    </center>    
                </td>
                <td>
                    <center>
                        {{ $player->Tiempo }}
                    </center>
                </td>
                <td>
                    <center>
                        <a href="{{ route('jugadores.edit', $player) }}">Editar</a>
                    </center>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>