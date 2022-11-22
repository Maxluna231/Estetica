<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fechas citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="http://localhost/proyecto-estetica/plantilla/css/coloresCitas.css" rel="stylesheet">
</head>

<body>

    <div class="contenedor-responsive">

        <ul>
            <h1 id="color-name">ESTETICA TORRES</h1>
            <ul class="nav-items">

                <a id="color-name2" href="Inicio">Pagina inicio </a>
                <a id="color-name2" href="Servicios">Servicios </a>
                <a id="color-name2" href="Tratamiento">Tratamiento </a>
                <a id="color-name2" href="#">Informacion</a>
                <a id="color-name2"> Servicios</a>

            </ul>

            <image class="img-fluid"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTebYhuV-1xuZH1V-xAaR3v7M0uKLr3nKd88g&usqp=CAU">
    </div>

    <div id="CitasC" class="contenedor">
            <center>
                <a> Citas</a>
                </center>
                </div>

    
    <tr  class="texto">
        <td align="right" id="idTDFechaCalendario">
            <strong id="Fecha">Selecciona una Fecha y Hora </strong>
            
        </td>
        <td id="mes" id ="idTDCalendario" colspan="2" class="tablaDatosGray">
            <table width="100%">
                <tbody>
                    <tr>
                        <td width="50%">

                        <table id="tabla" class="table table-bordered">
                               
                                <tbody>
                                    <tr>
                                        <th  id="mes" class="cabeceraCal1" '="">

			&nbsp;
		</th>
 		<th id="mes" colspan="5" class="cabeceraCal2">

			NOVIEMBRE
 	</th>
			<th id="mes"class="cabeceraCal3">

			<a href="#Ancla" onclick="mostrarCalendario(' 2');" class="flechas">&gt;&gt;</a>
                                        </th>
                                    </tr>
                                    <tr>
                                    </tr>
                                  
                                    <tr id ="dias" class="trDias">
                                        <th width="40" class="thDia">Lunes</th>
                                        <th width="40" class="thDia">Martes</th>
                                        <th width="40" class="thDia">Miercoles</th>
                                        <th width="40" class="thDia">Jueves</th>
                                        <th width="40" class="thDia">Viernes</th>
                                        <th width="40" class="thDia">Sabado</th>
                                        <th width="40" class="thDia">Domingo</th>
                                    </tr>

                                    <tr align="center">
                                        <td id="gris" class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td id="SinCitas" class="sincitas">
                                            01
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            02
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            03
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            04
                                        </td>
                                        <td  id="SinCitas" id="SinCitas"  class="sincitas">
                                            05
                                        </td>
                                        <td  id="SinCitas" class="sincitas">
                                            06
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td  id="SinCitas" class="sincitas">
                                            07
                                        </td>
                                        <td  id="SinCitas"  class="sincitas">
                                            08
                                        </td>
                                        <td  id="SinCitas" class="sincitas">
                                            09
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            10
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            11
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            12
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            13
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td id="SinCitas" class="sincitas">
                                            14
                                        </td>
                                        <td id="SinCitas" class="sincitas">
                                            15
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            16
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            17
                                        </td>
                                        <td id="SinCitas"  class="sincitas">
                                            18
                                        </td>
                                        <td id="SinCitas" class="sincitas">
                                            19
                                        </td>
                                        <td id="SinCitas" class="sincitas">
                                            20
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td id="SinCitas" class="sincitas">
                                            21
                                        </td>
                                        <td  id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('22/11/2022')">22</a>
                                        </td>
                                        <td id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('23/11/2022')">23</a>
                                        </td>
                                        <td id="Alta"class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('24/11/2022')">24</a>
                                        </td>
                                        <td id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('25/11/2022')">25</a>
                                        </td>
                                        <td id="Poca"class="disponible">
                                        <a href="#Ancla" onclick="actualizarHoras('26/11/2022')">26</a>
                                        </td>
                                        <td id="Poca"class="disponible">
                                        <a href="#Ancla" onclick="actualizarHoras('27/11/2022')">27</a>
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td id="Alta"class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('28/11/2022')">28</a>
                                        </td>
                                        <td id="Alta"class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('29/11/2022')">29</a>
                                        </td>
                                        <td id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('30/11/2022')">30</a>
                                        </td>
                                        <td id="gris" class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td id="gris"class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td id="gris" class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td id="gris"class="inactivo">
                                            &nbsp;
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <table border="0" cellspacing="0" cellpadding="5" class="tablaCalendario"
                                style="display: none;" id="tablaMes2" width="280">
                                <tbody>
                                    <tr>
                                        <th class="cabeceraCal1" '="">

			<a href="#Ancla" onclick="mostrarCalendario(' 1');" class="flechas">&lt;&lt;</a>
                                        </th>
                                        <th colspan="5" class="cabeceraCal2">

                                            DICIEMBRE
                                        </th>
                                        <th class="cabeceraCal3">

                                            <a href="#Ancla" onclick="mostrarCalendario('3');"
                                                class="flechas">&gt;&gt;</a>
                                        </th>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr class="trDias">
                                        <th width="40" class="thDia">Lun</th>
                                        <th width="40" class="thDia">Mar</th>
                                        <th width="40" class="thDia">Mie</th>
                                        <th width="40" class="thDia">Jue</th>
                                        <th width="40" class="thDia">Vie</th>
                                        <th width="40" class="thDia">Sab</th>
                                        <th width="40" class="thDia">Dom</th>
                                    </tr>

                                    <tr align="center">
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('01/12/2022')">01</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('02/12/2022')">02</a>
                                        </td>
                                        <td class="sinservicio">
                                            03
                                        </td>
                                        <td class="sinservicio">
                                            04
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('05/12/2022')">05</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('06/12/2022')">06</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('07/12/2022')">07</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('08/12/2022')">08</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('09/12/2022')">09</a>
                                        </td>
                                        <td class="sinservicio">
                                            10
                                        </td>
                                        <td class="sinservicio">
                                            11
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('12/12/2022')">12</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('13/12/2022')">13</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('14/12/2022')">14</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('15/12/2022')">15</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('16/12/2022')">16</a>
                                        </td>
                                        <td class="sinservicio">
                                            17
                                        </td>
                                        <td class="sinservicio">
                                            18
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('19/12/2022')">19</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('20/12/2022')">20</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('21/12/2022')">21</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('22/12/2022')">22</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('23/12/2022')">23</a>
                                        </td>
                                        <td class="sinservicio">
                                            24
                                        </td>
                                        <td class="sinservicio">
                                            25
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="sinservicio">
                                            26
                                        </td>
                                        <td class="sinservicio">
                                            27
                                        </td>
                                        <td class="sinservicio">
                                            28
                                        </td>
                                        <td class="sinservicio">
                                            29
                                        </td>
                                        <td class="sinservicio">
                                            30
                                        </td>
                                        <td class="sinservicio">
                                            31
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <table border="0" cellspacing="0" cellpadding="5" class="tablaCalendario"
                                style="display: none;" id="tablaMes3" width="280">
                                <tbody>
                                    <tr>
                                        <th class="cabeceraCal1" '="">

			<a href="#Ancla" onclick="mostrarCalendario(' 2');" class="flechas">&lt;&lt;</a>
                                        </th>
                                        <th colspan="5" class="cabeceraCal2">

                                            ENERO
                                        </th>
                                        <th class="cabeceraCal3">

                                            &nbsp;
                                        </th>
                                    </tr>
                                    <tr>
                                    </tr>
                                    <tr class="trDias">
                                        <th width="40" class="thDia">Lun</th>
                                        <th width="40" class="thDia">Mar</th>
                                        <th width="40" class="thDia">Mie</th>
                                        <th width="40" class="thDia">Jue</th>
                                        <th width="40" class="thDia">Vie</th>
                                        <th width="40" class="thDia">Sab</th>
                                        <th width="40" class="thDia">Dom</th>
                                    </tr>

                                    <tr align="center">
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="sinservicio">
                                            01
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="sinservicio">
                                            02
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('03/01/2023')">03</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('04/01/2023')">04</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('05/01/2023')">05</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('06/01/2023')">06</a>
                                        </td>
                                        <td class="sinservicio">
                                            07
                                        </td>
                                        <td class="sinservicio">
                                            08
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('09/01/2023')">09</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('10/01/2023')">10</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('11/01/2023')">11</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('12/01/2023')">12</a>
                                        </td>
                                        <td class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('13/01/2023')">13</a>
                                        </td>
                                        <td class="sinservicio">
                                            14
                                        </td>
                                        <td class="sinservicio">
                                            15
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('16/01/2023')">16</a>
                                        </td>
                                        <td id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('17/01/2023')">17</a>
                                        </td>
                                        <td id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('18/01/2023')">18</a>
                                        </td>
                                        <td id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('19/01/2023')">19</a>
                                        </td>
                                        <td  id="Alta" class="disponible">
                                            <a href="#Ancla" onclick="actualizarHoras('20/01/2023')">20</a>
                                        </td>
                                        <td class="sincitas">
                                            21
                                        </td>
                                        <td class="sincitas">
                                            22
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="sincitas">
                                            23
                                        </td>
                                        <td class="sincitas">
                                            24
                                        </td>
                                        <td class="sincitas">
                                            25
                                        </td>
                                        <td class="sincitas">
                                            26
                                        </td>
                                        <td class="sincitas">
                                            27
                                        </td>
                                        <td class="sincitas">
                                            28
                                        </td>
                                        <td class="sincitas">
                                            29
                                        </td>
                                    </tr>
                                    <tr align="center">
                                        <td class="sincitas">
                                            30
                                        </td>
                                        <td class="sincitas">
                                            31
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                        <td class="inactivo">
                                            &nbsp;
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td width="50%" valign="top">
                        <table  id="tabla1" class="table table-bordered">
                                <tbody>
                                    <tr id="mes"class="trDias">
                                        <th colspan="2" align="center" class="thDia">Disponibilidad</th>
                                    </tr>
                                    <tr>
                                        <td width="12%" id="Alta"class="disponible"></td>
                                        <td width="88%" id="gris" class="glosario">Alta disponibilidad</td>
                                    </tr>
                                    <tr>
                                        <td id="Poca" class="disponibleParcial"></td>
                                        <td   id="gris" class="glosario">Poca disponibilidad</td>
                                    </tr>
                                    <tr>
                                        <td id="Sin" class="ocupado"></td>
                                        <td  id="gris"class="glosario">Sin disponibilidad</td>
                                    </tr>
                                    <tr>
                                        <td  id="Sin1"class="sinservicio"></td>
                                        <td  id="gris" class="glosario">Día sin servicio</td>
                                    </tr>
                                    <tr>
                                        <td id="Sin2" class="sincitas"></td>
                                        <td  id="gris"class="glosario">Día sin disponibilidad de cita</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    
        <img src="./html/img/ajax-loader_circulo.gif" style="display: none;" id="loader3">
    </td>

    <tr>
								<td class="texto"  align="right"><strong id="SinCitas">Fecha seleccionada:</strong></td>
								<td colspan="2" class="tablaDatosGray">
									<table width="60%" border="0" cellpadding="5" cellspacing="1">
										<tbody><tr>
											<td width="33%" align="center" bgcolor="#F3F3F3" class="textob" id="idTDFecha">22 - 11 - 2022</td>
											<td class="texto" align="right">
												<span class="datoRequerido">* </span>
												<strong>Horarios disponibles:</strong>
											</td>
											<td width="33%" align="left" bgcolor="#F3F3F3" class="calSin">
												<table border="0">
													<tbody><tr>
														<td>
															<select name="dtoCita.id.idRango" onchange="colocaDescripcionHorario();">
															<option></option><option value="52">08:36</option><option value="53">08:48</option><option value="61">10:24</option><option value="63">10:48</option><option value="65">11:12</option><option value="66">11:24</option><option value="71">12:24</option><option value="72">12:36</option><option value="73">12:48</option><option value="74">13:00</option><option value="75">13:12</option><option value="76">13:24</option><option value="77">13:36</option><option value="78">13:48</option><option value="80">14:12</option><option value="81">14:24</option><option value="83">14:48</option><option value="86">15:24</option><option value="87">15:36</option><option value="88">15:48</option><option value="90">16:12</option><option value="91">16:24</option><option value="92">16:36</option><option value="93">16:48</option><option value="97">17:36</option><option value="98">17:48</option><option value="99">18:00</option><option value="100">18:12</option><option value="101">18:24</option><option value="102">18:36</option><option value="103">18:48</option><option value="105">19:12</option><option value="106">19:24</option><option value="107">19:36</option></select>
														</td>
														<td>
															
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>

                     
                     <tr>
								<td class="info1" align="right">Fecha y hora seleccionada:</td>
								<td colspan="2">
									<table width="50%" border="0" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC">
										<tbody><tr>
											<td width="50%" align="center"  class="login_resolucion" id="idTDFechaHora">&nbsp;</td>
											
												
											</td>
										</tr>
									</tbody></table>
								</td>			
							</tr>

                     <tr>
								<td>&nbsp;</td>
								<td height="14">
									<table width="30%" border="0" align="left" cellpadding="0" cellspacing="0">
										<tbody><tr>
											<td>
												<input type="button" name="btnApartar" class="btnReservar" value="Reservar horario" onclick="reservarHorario(); habilitaBoton(); " disabled="">
											</td>
											<td>&nbsp;</td>
											<td>
												<input type="button" name="btnDesapartar" value="Cambiar horario" onclick="desapartar('false'); habilitaBoton(); " disabled="">
											</td>
										</tr>
										<tr>
											<td colspan="2">
											</td>
										</tr>
									</tbody></table>
								</td>
								<td>&nbsp;</td>
							</tr>
    </div>

</body>

</html>