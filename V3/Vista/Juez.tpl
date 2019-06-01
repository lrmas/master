{include file="Librerias/Header.tpl" title="Jueces"}
<div align="center">
    <h1>JUEZ</h1>
</div>
    <table>
        <tr>
            <td>
                <label>Juez-> {php}echo $_SESSION['user']; {/php}</label>
            </td>
        </tr>
        <tr>
            <td>
                <a href="?controller=Salir">Salir</a>
            </td>
        </tr>
    </table>
    
    <div align="center">
        <table border=1>
            <tr>
                <th align="center">
                    <label>Jugador</label>
                </th>
                <th align="center">
                    <label>Box</label>
                </th>
                <th align="center">
                    <label>Tipo_Ejercicio</label>
                </th>
                <th align="center">
                    <label>Repeticiones</label>
                </th>
                <th align="center">
                    <label>Tiempo</label>
                </th>
                <th align="center">
                    <label>Estado</label>
                </th>
            </tr>
            {foreach item=jugadores from=$revisar}
                <tr>
                    <td align="center">
                        <label>{$jugadores.Jugador}</label>
                    </td>
                    <td align="center">
                        <label>{$jugadores.Box}</label>
                    </td>
                    <td align="center">
                        <label>{$jugadores.TipoEjercicio}</label>
                    </td>
                    <td align="center">
                        <label>{$jugadores.Repeticiones}</label>
                    </td>
                    <td align="center">
                        <label>{$jugadores.Tiempo}</label>
                    </td>
                    <td align="center">
                        {if {$jugadores.Estado}==1}
                            <label>Validado</label>
                        {else}
                            <label>No Validado</label>
                        {/if}
                    </td>
                    <td>
                        <a href="http://crossfitgameumg.solucionesdigitalesgt.xyz/?controller=Validar&User={$jugadores.IdEjercicio}">Validar</a>
                    </td>
                </tr>
            {/foreach}
        </table>
    </div>
    
<div class="footer">
    {include file="Librerias/Footer.tpl"}
</div>