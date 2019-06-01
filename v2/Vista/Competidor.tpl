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
                <img src="{php}echo $_SESSION['foto']; {/php}" height="50px" width="50px"/>
            </td>
        </tr>
    </table>
<div class="footer">
    {include file="Librerias/Footer.tpl"}
</div>