{include file="Librerias/Header.tpl" title="Competidores"}
<div align="center">
    <h1>COMPETIDORES</h1>
</div>
    <table>
        <tr>
            <td>
                <label>Competidor-> {php}echo $_SESSION['user']; {/php}</label>
            </td>
            <td>
                <img src="{php}echo $_SESSION['foto']; {/php}" height="75px" width="75px"/>
            </td>
        </tr>
        <tr>
            <td>
                <a href="?controller=Salir">Salir</a>
            </td>
        </tr>
    </table>
    <div align="center">
        <form method="post" action="?controller=Participantes">
            <table>
                <tr>
                    <td>
                        <label>Ejercicio</label>
                    </td>
                    <td>
                        <input type="text" name="ejercio" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Repeticiones</label>
                    </td>
                    <td>
                        <input type="text" name="repeticiones" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tiempo</label>
                    </td>
                    <td>
                        <input type="text" name="tiempo" required=""/><label>_minutos</label>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <br />
                        <input type="submit" value="Registrar" />
                        <input type="hidden" name="RunEjerccio" value="wod"/>
                    </td>
                    <td align="center">
                        <br />
                        <input type="reset" value="Limpiar"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
<div class="footer">
    {include file="Librerias/Footer.tpl"}
</div>