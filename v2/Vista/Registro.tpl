{include file="Librerias/Header.tpl" title="RegistroCrossfitGame"}
    
    <div align="center">
        <h1>REGISTRO USUARIO CROSSFIT GAME</h1>
    </div>
    <br />
    <div align="center">
        <table>
            <form method="post" action="?controller=Registro" enctype="multipart/form-data">
                <tr>
                    <td>
                        <label>Nombre</label>
                    </td>
                    <td>
                        <input type="text" title="Nombre de Competidor" name="nombre" autofocus="" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nick Name</label>
                    </td>
                    <td>
                        <input type="text" title="Nick name de Competidor" name="nick" autofocus="" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Fecha Nacimiento</label>
                    </td>
                    <td>
                        <input type="date" title="Fecha de nacimiento" required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Genero</label>
                    </td>
                    <td>
                        <select name="genero" title="Genero">
                            <option value="masculino">MASCULINO</option>
                            <option value="femenino">FEMENINO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Edad</label>
                    </td>
                    <td>
                        <input type="text" title="Edad del Competidor" name="edad"  required=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Box</label>    
                    </td>
                    <td>
                        <select name="box" title="Box">
                            
                                
                             
                             {foreach item=boxs from=$box}
                                <option value="{$boxs.Nombre}">{$boxs.Nombre}</option>
                             {/foreach}
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" title="Password de Competidor" name="password" required="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Rep. Password</label>
                    </td>
                    <td>
                        <input type="password" title="Repetir Password de Competidor" name="repassword" required="" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>foto</label>
                    </td>
                    <td>
                        <input name="foto" type="file" title="Foto de Competidor"/>
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