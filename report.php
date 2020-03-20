<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Reporte de caso</title>
        <!-- Compiled and minified CSS -->
        <link rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons'
            rel='stylesheet'>

            <link rel="stylesheet" href="styles/styles.css">
    </head>
    <body>

        <?php
        //SIN NINGUN TIPO DE SEGURIDAD , ES MERAMENTE PRESENTACIÓN
            $mail =  $_POST['mail'];
            $pass = $_POST['pass'];
            $static_mail = 'dr@mail.com';
            $static_pass = '1234';
            if(  $mail == $static_mail && $pass == $static_pass){
            echo " 

        <div class='fixed-action-btn' id='btn-side'>
            <a href='#' data-target='mobile-demo' class='btn-floating btn-large
                sidenav-trigger tooltipped black' data-position='left'
                data-tooltip='Secciones del reporte'> <i class='large
                    material-icons'>more_vert</i>
            </a>
        </div>

        <div class='fixed-action-btn' id='op-multiple'>
            <a class='btn-floating btn-large black tooltipped'
                data-position='left' data-tooltip='Secciones del reporte'>
                <i class='large material-icons'>more_vert</i>
            </a>
            <ul>
                <li><a class='btn-floating teal btn tooltipped'
                        data-position='left' data-tooltip='Información general'
                        href='#info-general'><i class='material-icons'>location_on</i></a></li>
                <li><a class='btn-floating teal tooltipped' data-position='left'
                        data-tooltip='Información del paciente'
                        href='#pacient-info'><i class='material-icons'>pets</i></a></li>
                <li><a class='btn-floating teal tooltipped' data-position='left'
                        data-tooltip='Revisión' href='#revision'><i
                            class='large material-icons'>remove_red_eye</i></a></li>
                <li><a class='btn-floating teal tooltipped' data-position='left'
                        data-tooltip='Pruebas' href='#pacient-tests'><i
                            class='material-icons'>assignment</i></a></li>
                <li><a class='btn-floating teal tooltipped' data-position='left'
                        data-tooltip='Conclusión' href='#pacient-conclusion'><i
                            class='large material-icons'>assignment_turned_in</i></a></li>
                <li><a class='btn-floating teal tooltipped' data-position='left'
                        data-tooltip='Tratamiento' href='#pacient-treatment'><i
                            class='large material-icons'>healing</i></a></li>
                <li><a class='btn-floating teal tooltipped' data-position='left'
                        data-tooltip='Recomendaciones'
                        href='#pacient-recomendations'><i
                            class='large material-icons'>thumb_up_alt</i></a></li>
                <li><a class='btn-floating teal tooltipped' data-position='left'
                        data-tooltip='Volver arriba' href='#nav'><i class='large
                            material-icons'>arrow_upward</i></a></li>
            </ul>
        </div>

        <!--Navbar-->
        <nav id='nav' class='navb'>
            <div class='nav-wrapper cyan darken-3'>
                <a href='#!' class='brand-logo'>Oftalvet</a>
                <a href='#' data-target='mobile-demo' class='sidenav-trigger'><i
                        class='material-icons'>menu</i></a>
                <ul class='right hide-on-med-and-down'>
                    <li><a href='#info-general'>Información general</a></li>
                    <li><a href='#pacient-info'>Información del paciente</a></li>
                    <li><a href='#revision'>Revisión</a></li>
                    <li><a href='#pacient-tests'>Pruebas</a></li>
                    <li><a href='#pacient-conclusion'>Conclusión</a></li>
                    <li><a href='#pacient-treatment'>Tratamiento</a></li>
                    <li><a href='#pacient-recomendations'>Recomendaciones</a></li>
                    <li><a href='index.html'>Salir</a></li>
                </ul>
            </div>
        </nav>

        <ul class='sidenav cyan darken-3' id='mobile-demo'>
            <li><a href='#info-general' class='sidenav-close white-text'>Información
                    general</a></li>
            <li><a href='#pacient-info' class='sidenav-close white-text'>Información
                    del paciente</a></li>
            <li><a href='#revision' class='sidenav-close white-text'>Exploración
                    general</a></li>
            <li><a href='#pacient-tests' class='sidenav-close white-text'>Pruebas</a></li>
            <li><a href='#pacient-conclusion' class='sidenav-close white-text'>Conclusión</a></li>
            <li><a href='#pacient-treatment' class='sidenav-close
                    white-text'>Tratamiento</a></li>
            <li><a href='#pacient-recomendations' class='sidenav-close
                    white-text'>Recomendaciones</a></li>
            <li><a href='#nav' class='sidenav-close white-text'>Volver arriba</a></li>
            <li><a class='white-text' href='index.html'>Salir</a></li>
        </ul>
        <!--Navbar-->

        <!--Contenido-->
        <div class='container top-margin-h'>
            <div class='row'>
                <div id='logo' class='col s12 left'>
                    <img class='responsive-img' src='img/oftalvet.png'>
                </div>
                <div class='col s12 center'>
                    <h5 id='main-title'>Reporte de Caso</h5>
                </div>
            </div>


            <div class='row' id='info-general'>
                <div class='col s12'>
                    <h6 id='general-info-title'>Información general:</h6>
                </div>

                <div class='input-field col s12 m6'
                    id='ubication-div'>
                    <i class='material-icons prefix'>location_on</i>
                    <input id='ubication' type='text' class=''>
                    <label for='ubication' id='l-ubication'>Dirección</label>
                </div>

                <div class='input-field col s12 m6' id='date-div'>
                    <i class='material-icons prefix'>event</i>
                    <input id='date' type='text' class='datepicker'>
                    <label for='date' id='l-date'>Fecha</label>
                </div>

                <div class='input-field col s12' id='appoinment-div'>
                    <i class='material-icons prefix'>edit</i>
                    <textarea id='appoinment' class='materialize-textarea'></textarea>
                    <label for='appoinment' id='l-appoinment'>Anamnesis</label>
                </div>
            </div>

            <div class='row no-margin' id='pacient-info'>
                <div class='col s12'>
                    <h6 id='pacient-info-title'>Información del paciente:</h6>
                </div>

                <div class='input-field col s12 m4' id='pacient-div'>
                    <i class='material-icons prefix'>pets</i>
                    <input id='pacient' type='text' class=''>
                    <label for='pacient' id='l-pacient'>Nombre</label>
                </div>

                <div class='input-field col s12 m4' id='age-div'>
                    <i class='material-icons prefix'>today</i>
                    <input id='age' type='number' class=''>
                    <label for='age' id='l-age'>Edad</label>
                </div>

                <div class='input-field col s12 m4' id='weight-div'>
                    <i class='material-icons prefix'>filter_frames</i>
                    <input id='weight' type='text' class=''>
                    <label for='weight' id='l-weight'>Peso</label>
                </div>

                <div class='input-field col s12 m6' id='breed-div'>
                    <i class='material-icons prefix'>loyalty</i>
                    <input id='breed' type='text' class=''>
                    <label for='breed' id='l-breed'>Raza</label>
                </div>

                <div class='input-field col s12 m6' id='owner-div'>
                    <i class='material-icons prefix'>account_circle</i>
                    <input id='owner' type='text' class=''>
                    <label for='owner' id='l-owner'>Propietario</label>
                </div>
            </div>
               
    
            <div class='div' id='revision'>
                <div class='row'>
                    <div class='col s12'>
                        <h6 id='revision-title'>Revisión:</h6>
                    </div>

                    <div class='col col s12'>
                        <table class='striped centered'>
                            <thead>
                                <tr class='cyan darken-3'>
                                    <th></th>
                                    <th><p class='white-text'>EXPLORACIÓN
                                            GENERAL</p></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th><p> OJO IZQUIERDO </p></th>
                                    <th></th>
                                    <th><p> OJO DERECHO </p></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td> <p>Schirmer</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Orbita</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Dimensión anatómica</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Parpado superior</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Parpado Inferior</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Tercer parpado</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Conjuntiva</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class='striped centered'>
                            <thead>
                                <tr class='cyan darken-3'>
                                    <th></th>
                                    <th><p class='white-text'
                                            id='neurology-title'>NEUROLOGIA</p></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th><p> OJO IZQUIERDO </p></th>
                                    <th></th>
                                    <th><p> OJO DERECHO </p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Reflejo palpebral</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Reflejo corneal</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Reflejo amenaza</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p> Reflejo pupilar </p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p> Reflejo consensuado </p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p> Dazzle (deslumbramiento) </p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class='striped centered'>
                            <thead>
                                <tr class='cyan darken-3'>
                                    <th></th>
                                    <th><p class='white-text'
                                            id='neurology-title'>MICROSCOPIA</p></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th><p> OJO IZQUIERDO </p></th>
                                    <th></th>
                                    <th><p> OJO DERECHO </p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Cornea</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Iris</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Cristalino</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Carúncula</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Orificio Lagrimal</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Hendidura</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Tyndall</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class='striped centered'>
                            <thead>
                                <tr class='cyan darken-3'>
                                    <th></th>
                                    <th><p class='white-text'
                                            id='neurology-title'>TINCIONES</p></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th><p> OJO IZQUIERDO </p></th>
                                    <th></th>
                                    <th><p> OJO DERECHO </p></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Fluoresceína</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>TRL - Butt</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Jones</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Rose Bengala</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td><p class='bold'>PIO (Presión
                                            intraocular)</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'>OD: </textarea></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'>OS:</textarea></td>
                                </tr>
                                <tr>
                                    <td><p class='bold'>Oftalmoscopia directa</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td><p class='bold'>Oftalmoscopia indirecta</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Zona Tapetal</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Zona no tapetal</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Vascularización</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Reflectividad</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                                <tr>
                                    <td> <textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                    <td><p>Papila nervio óptico</p></td>
                                    <td><textarea
                                            class='materialize-textarea'
                                            id='table-text'></textarea></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--
            <div class='row'>
                <div class='col s6 m6 offset-s3 offset-m3'
                    id='line-width'>
                    <h6>
                        <i class='material-icons left'>line_weight</i>Tamaño
                        de línea</h6>
                    <p class='range-field'>
                        <input value='2' type='range' id='modificarTamano'
                            min='1' max='10' />
                    </p>
                </div>
            </div>
            -->
            <div class='row'>
                <div class='col s12 m1' id='colors'>
                    <div class='row'>
                        <div class='col s12' >
                            <p class = 'left' >Elija un color </p>
                        </div>
                        <div class='col s2 m12'>
                            <a class='btn-floating btn-small waves-effect waves-light red accent-4' id='redColor'><i class='material-icons'>colorize</i></a>
                        </div>
                        <div class='col s2 m12' >
                            <a class='btn-floating btn-small waves-effect   waves-light black' id='blackColor'><i    class='material-icons'>colorize</i></a>
                        </div>
                    </div>
                </div>

                <div id='content' class='col s12 m7'>
                    <div class='center'>
                        <div id='signature'></div>
                    </div>
                </div>

                <div id='drawDiv' class='col s12 m4'> 
                    <label for='drawNotes'>Notas adicionales</label>
                    <textarea class='form-control' id='drawNotes' placeholder='Presione aquí para empezar a escribir'></textarea>
                </div>

            </div>
          
            <div class='row' id='pacient-tests'>
                <div class='col s12'>
                    <h6 id='tests-title'>Pruebas complementarias:</h6>
                </div>
                <div class='input-field col s12' id='div-hist'>
                    <i class='material-icons prefix'>assignment</i>
                    <textarea id='tests' class='materialize-textarea'></textarea>
                </div>
            </div>

            <div class='row' id='pacient-conclusion'>
                <div class='col s12'>
                    <h6 id='conclusion-title'>Conclusión:</h6>
                </div>

                <div class='input-field col s12' id='lft-eye-div'>
                    <i class='material-icons prefix'>check</i>
                    <textarea id='lft-eye'
                        class='materialize-textarea'></textarea>
                    <label for='lft-eye' id='l-lft-eye'>Ojo
                        izquierdo</label>
                </div>

                <div class='input-field col s12' id='rgt-eye-div'>
                    <i class='material-icons prefix'>check</i>
                    <textarea id='r-eye' class='materialize-textarea'></textarea>
                    <label for='r-eye' id='l-r-eye'>Ojo derecho</label>
                </div>
            </div>

            <div class='row' id='pacient-treatment'>
                <div class='col s12'>
                    <h6 id='treatment-title'>Tratamiento:</h6>
                </div>
                <div class='input-field col s12' id='div-tratamiento'>
                    <i class='material-icons prefix'>healing</i>
                    <textarea id='treatment' class='materialize-textarea'></textarea>
                </div>
            </div>

            <div class='row' id='pacient-recomendations'>
                <div class='col s12'>
                    <h6 id='recomendations-title'>Recomendaciones:</h6>
                </div>
                <div class='input-field col s12' id='div-recomendaciones'>
                    <i class='material-icons prefix'>thumb_up_alt</i>
                    <textarea id='recomendations' class='materialize-textarea'></textarea>
                </div>
            </div>

            <div class='row' id='aditional-for-pacient'>
                <div class='col s12'>
                    <h6 id='extra-notes-title'>Notas adicionales:</h6>
                </div>
                <div class='input-field col s12' id='div-adicional'>
                    <i class='material-icons prefix'>queue</i>
                    <textarea id='aditional' class='materialize-textarea'></textarea>
                </div>
            </div>

            <div class='row' id='nombre-dr'>
                <div class='col s12'>
                    <h6>Dr. Hugo Gamboa B. <br>Oftalvet Costa
                        Rica<br>505<br>Centro oftalmológico Animal<br>Buenos
                        Aires Argentina</h6>
                </div>
            </div>

            <div class='row center'>
                <div class='col s12'>
                    <a class='waves-effect cyan darken-3 btn' id='print'><i
                            class='material-icons left'>save</i>Guardar PDF</a>
                </div>
            </div>

        </div>
        <!--Contenido-->

        <!--Pie de página-->
        <footer class='page-footer cyan darken-3 top-margin-h'>
            <div class='container'>
                <div class='row'>
                    <div class='col s12 no-margin'>
                        <p class='grey-text text-lighten-4'>Oftalvet Costa
                            Rica
                            (oftalmología
                            veterinaria Costa Rica) Tel: 2253-6303 Fax:
                            2283-1384 - Centro Comercial Plaza Cristal, José
                            Ma.Zeledón, Curridabat, San José Costa Rica.</p>
                    </div>
                </div>
            </div>
            <div class='footer-copyright'>
            </div>
        </footer>
        <!--Pie de página-->
        ";
            }
            else{
                echo "<div class='row container center top-m-block block' id='noAcceso'>

                <div class='card hoverable s10 section'>
    
                    <h3>Acceso <span class='red-text'> restringido</span>.</h3>
                    <i class='large material-icons red-text'>block</i>
    
                </div>
            </div>";
            }
        ?>
        <script>
            function preventBack() { window.history.forward(); }
            setTimeout("preventBack()", 0);
            window.onunload = function () { null };
        </script>
        <!-- Compiled and minified JavaScript -->
        <script
            src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script
            src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
        <script src='js/jSignature.min.noconflict.js'></script>
        <script
            src='js/main.js'></script>
    </body>
</html>