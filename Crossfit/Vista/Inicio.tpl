{include file="Librerias/Header.tpl" title="CrossfitGame"}
    
    <div align="center">
        <h1>CROSSFIT GAME</h1>
    </div>
    <br /><br />
    <div align="center">
        <table>
            <form method="post" action="?controller=Login">
                <tr>
                    <td>
                        <label>Usuario</label>
                    </td>
                    <td>
                        <input type="text" title="Nombre de Usuario" name="nombre" autofocus="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" title="Password de Usuario" name="password"  />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tipo</label>
                    </td>
                    <td>
                        <select name="tipo" title="Tipo de Usuario">
                            <option value="competidor">COMPETIDOR</option>
                            <option value="box">BOX</option>
                            <option value="juez">JUEZ</option>
                            <option value="espectador">ESPECTADOR</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br />
                    </td>
                    <td>
                        <br />
                    </td>
                </tr>
                <tr>
                    <input type="hidden" name="login" value="registro"/>
                    <td align="center">
                        <input type="submit" value="Entrar"/>
                    </td>
                    <td align="center">
                        <input type="reset" value="Limpiar"/>
                    </td>
                </tr>
                
            </form>
        </table>
    </div>
    <br />
    <br />
    <div align="center">
        <a href="http://crossfitgameumg.solucionesdigitalesgt.xyz/?controller=Registro&registroUser=user" title="Registo de Usuarios">Registro</a>
    </div>
        
<div class="footer">
    {include file="Librerias/Footer.tpl"}
</div>
