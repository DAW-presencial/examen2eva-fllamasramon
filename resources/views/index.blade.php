<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"><!-- comment -->
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

    <body>

        <div class="container mt-5">
            <form action="">
                <fieldset class="form-group shadow p-3 mb-5 bg-white rounded">
                    <legend>Tutor de la empresa</legend>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="badge bg-info text-dark">Nombre de la empresa</label>
                            <input type="text" value="{{ old('empresa_nombre') }}" class="form-control" id="empresa_nombre" placeholder="Empresa">
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="badge bg-info text-dark">Nombre del Tutor</label>
                            <input type="text" value="{{ old('tutor_nombre') }}"class="form-control" id="tutor_nombre" placeholder="Nombre">
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="badge bg-info text-dark">Primer Apellido</label>
                            <input type="text" value="{{ old('tutor_apellido1') }}"class="form-control" id="tutor_apellido1">
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlInput1" class="badge bg-info text-dark">Segundo apellido</label>
                            <input type="text" value="{{ old('tutor_apellido2') }}"class="form-control" id="tutor_apellido2">
                        </div>
                    </div>
                    <div>
                        <select class="form-select" aria-label="Default select example" id="estado">
                            <option selected>Estado del tutor</option>
                            <option value="1">En activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="exampleFormControlInput1" class="badge bg-info text-dark">Email</label>
                            <input type="email" value="{{ old('email') }}"class="form-control" id="email" placeholder="prueba@prueba.com">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="exampleFormControlTextarea1" class="badge bg-info text-dark">Telefono</label>
                            <input type="phone" value="{{ old('phone') }}"class="form-control" id="phone" placeholder="xxx-xxx-xxx">
                        </div>
                        <div>
                            <select class="form-select" aria-label="Default select example" id="pais">
                                <option selected>País</option>
                                <option value="1">España</option>
                                <option value="2">Alemania</option>
                                <option value="3">Francia</option>
                            </select>
                        </div>
                        <div>
                            <select class="form-select" aria-label="Default select example" id="provincia">
                                <option selected>Provincia</option>
                                <option value="1">Baleares</option>
                                <option value="2">Girona</option>
                                <option value="3">Cuenca</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <select class="form-select" aria-label="Default select example" id="municipio">
                                <option selected>Municipio</option>
                                <option value="1">Felanitx</option>
                                <option value="2">Alcudia</option>
                                <option value="3">Palma</option>
                            </select>
                        </div>

                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Añadir</button>
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </form>
            <footer class="footer mt-auto py-3 bg-light">
                <div class="container">
                    <span class="text-muted">Francisco Llamas</span>
                </div>
            </footer>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>

</html>

