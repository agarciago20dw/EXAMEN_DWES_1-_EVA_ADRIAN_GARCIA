<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Doctores y Pacientes</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="col-12 d-flex justify-content-between p-3">
            <h1 class="m-0 text-light">Doctores y Pacientes</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctores.mostrar') }}">Listar Doctores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pacientes.crear.formulario') }}">Crear Paciente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('doctor.crear.formulario') }}">Crear Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('paciente.doctor.asignar') }}">Asignar Paciente a Doctor</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12">
            @yield('crear_paciente')
            @yield('listar_doctores')
            @yield('editar_doctor')
            @yield('crear_doctor')
        </div>
    </div>
</div>
</body>
</html>