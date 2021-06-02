<!-- CONTIENE TODOS LOS INPUT´S NECESARIOS PARA QUE EL ASPIRANTE SE REGISTRE -->


<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

    <form action="#" method="post" novalidate>
        <fieldset>
            <legend>DATOS PERSONALES</legend>

            <!-- INPUT NOMBRE(S)-->
            <div class="form-group">
                <label for="nombres" class="label">Nombre(s)</label>
                <input type="text" inputmode="text" class="form-control" id="Nombres" name="Nombres"
                    placeholder="Nombre(s)" required>
                <p>Este campo debe tener una longitud entre 8 y 24 letras.
                    <strong>
                        Este campo únicamente acepta: Letras, letras acentuadas, espacios en blanco.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    Favor de ingresar su(s) nombre(s) completo(s).
                </div>
            </div>

            <!-- INPUT APELLIDO PATERNO -->
            <div class="form-group">
                <label for="Apellido__paterno" class="label">Apellido Paterno</label>
                <input type="text" inputmode="text" class="form-control" id="Apellido__paterno" name="Apellido__paterno"
                    placeholder="Apellido Paterno" required>
                <p>Este campo debe tener una longitud entre 8 y 24 letras.
                    <strong>
                        Este campo únicamente acepta: Letras, letras acentuadas, espacios en blanco.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    Favor de ingresar su apellido paterno.
                </div>
            </div>

            <!-- INPUT APELLIDO MATERNO -->
            <div class="form-group">
                <label for="Apellido_materno" class="label">Apellido Materno</label>
                <input type="text" inputmode="text" class="form-control" id="Apellido__materno" name="Apellido__materno"
                    placeholder="Apellido Materno" required>
                <p>Este campo debe tener una longitud entre 8 y 24 letras.
                    <strong>
                        Este campo únicamente acepta: Letras, letras acentuadas, espacios en blanco.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    Favor de ingresar su(s) nombre(s) completo(s)
                </div>
            </div>

            <!-- INPUT TELÉFONO FIJO -->
            <div class="form-group">
                <label for="Telefono__fijo" class="label">Teléfono Fijo</label>
                <input type="text" inputmode="tel" class="form-control" id="Telefono__fijo" name="Telefono_fijo"
                    placeholder="5556655445" required>
                <p>Este campo debe tener una longitud entre 10 y 20 números/digitos. <br>
                    NO debe contener espacios, guiones, puntos, comas, etc.
                    <strong>
                        Recuerde que la nueva marcación comienza con 55. Ejemplo: 5556655445
                    </strong>
                </p>
                <div class="invalid-feedback">
                    Favor de ingresar su número telefónico fijo y/o de casa.
                </div>
            </div>

            <!-- INPUT TELÉFONO MOVIL -->
            <div class="form-group">
                <label for="Telefono__movil" class="label__formulario">Teléfono Móvil</label>
                <input type="text" inputmode="tel" class="form-control" id="Telefono__movil" name="Telefono_Fijo"
                    placeholder="Teléfono Personal" required>
                <p>Este campo debe tener una longitud entre 10 y 20 numeros/digitos.<br>
                    NO debe contener espacios, guiones, puntos, comas, etc.
                </p>
                <div class="invalid-feedback">
                    Este campo NO puede estar vacio. Favor de verificarlo.
                </div>
            </div>

            <!-- INPUT´S DIRECCION -->
            <div class="form-group">
                <label for="Telefono__movil" class="label__formulario"></label>
                <input type="text" inputmode="tel" class="form-control" id="Telefono__movil" name="Telefono_Fijo"
                    placeholder="Teléfono Personal" required>
                <p>Este campo debe tener una longitud entre 10 y 20 numeros/digitos.<br>
                    NO debe contener espacios, guiones, puntos, comas, etc.
                </p>
                <div class="invalid-feedback">
                    Este campo NO puede estar vacio. Favor de verificarlo.
                </div>
            </div>
            <div class="form-group">
                <label for="Telefono__movil" class="label__formulario">Teléfono Móvil</label>
                <input type="text" inputmode="tel" class="form-control" id="Telefono__movil" name="Telefono_Fijo"
                    placeholder="Teléfono Personal" required>
                <p>Este campo debe tener una longitud entre 10 y 20 numeros/digitos.<br>
                    NO debe contener espacios, guiones, puntos, comas, etc.
                </p>
                <div class="invalid-feedback">
                    Este campo NO puede estar vacio. Favor de verificarlo.
                </div>
            </div>
            <div class="form-group">
                <label for="Telefono__movil" class="label__formulario">Teléfono Móvil</label>
                <input type="text" inputmode="tel" class="form-control" id="Telefono__movil" name="Telefono_Fijo"
                    placeholder="Teléfono Personal" required>
                <p>Este campo debe tener una longitud entre 10 y 20 numeros/digitos.<br>
                    NO debe contener espacios, guiones, puntos, comas, etc.
                </p>
                <div class="invalid-feedback">
                    Este campo NO puede estar vacio. Favor de verificarlo.
                </div>
            </div>


            <!-- INPUT CURP -->
            <div class="form-group">
                <label for="curp" class="label">Curp</label>
                <input type="text" inputmode="text" class="form-control" id="Curp" name="Curp"
                    oninput="validarInput(this)" placeholder="Curp" required>
                <p>Este campo debe tener una longitud de 18 letras y numeros.<br>
                    <strong>
                        En caso de duda cual es su curp, visite el siguiente link:<br>
                        <a class="buscar__Curp" href="https://www.gob.mx/curp/">
                            ¡Click aquí!.
                            <i class='bx bx-search'></i>
                        </a>
                    </strong>
                </p>
                <pre id="resultado"></pre>
                <div class="invalid-feedback">
                    Este campo NO puede estar vacio. Favor de verificarlo.
                </div>
            </div>




        </fieldset>
    </form>

</div>