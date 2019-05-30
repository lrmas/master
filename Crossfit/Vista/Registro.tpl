{include file="Librerias/Header.tpl" title="RegistroCrossfitGame"}
    
    <div align="center">
        <h1>REGISTRO USUARIO CROSSFIT GAME</h1>
    </div>
    <br /><br />
    <div align="center">
        <table>
            <form method="post" action="?controller=Registro" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label>Usuario</label>
                    </td>
                    <td>
                        <input type="text" title="Nombre de Usuario" name="nombre" autofocus="" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Genero</label>
                    </td>
                    <td>
                        <select name="genero">
                            <option value="hombre">MASCULINO</option>
                            <option value="mujer">FEMENINO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pais</label>    
                    </td>
                    <td>
                        <select name="pais">
                            <!-- 
                                smarty, cargar paises de tabla
                             -->
                        </select>
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
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" title="Password de Usuario" name="password" required="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Rep. Password</label>
                    </td>
                    <td>
                        <input type="password" title="Repetir Password de Usuario" name="repassword" required="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>foto</label>
                    </td>
                    <td>
                        <input name="foto" type="file" />
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
                    <input type="hidden" name="GuardarRegistroUser" value="registro"/>
                    <td align="center">
                        <input type="submit" value="Guardar"/>
                    </td>
                    <td align="center">
                        <input type="reset" value="Limpiar"/>
                    </td>
                </tr>
                
            </form>
        </table>
    </div>
    
<div class="footer">
    {include file="Librerias/Footer.tpl"}
</div>