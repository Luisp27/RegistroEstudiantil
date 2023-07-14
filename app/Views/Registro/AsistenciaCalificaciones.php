<!-- tabla 2 -->
<div class="container">
    
    <br />

    <div class="card text-center">
    <div class="card-header" style="background-color: #00020A;">
        <ul class="nav nav-pills card-header-pills">
            <li class="nav-item">
                <a class="nav-link active" style="padding-left: 10px; margin-right: 10px;" href="<?= base_url('tablaEstudiantes')?>">Inicio</a>
                
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('registrarEstudiante')?>">Registar Estudiante</a>
            </li>
        </ul>
    </div>
    <br />
        <div class="card text-center" style="background-color: #071F77;">
            <div class="card-header" style="background-color: #00020A;">
                <ul class="nav nav-tabs card-header-tabs">
                </ul>
            </div>
            <div class="card-body">
                <h2 style="color: #fff;">Buscar estudiante</h2>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br />
                <h5 class="card-title" style="color: #fff;">Asistencia y calificaciones</h5>
            </div>
        </div>
        <br />

        <table class="table table-dark table-striped">
            <!-- parte superior de la tabla -->
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Asistencia</th>
                    <th scope="col">calificacion</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>

                </tr>
            </thead>

            <!-- nombre -->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark Michael</td>
                    <td>P</td>
                    <td>90</td>
                    <td><a class="btn btn-primary" button>Editar</a></td>
                    <td><a class="btn btn-danger" button>Eliminar</a></td>
                </tr>

            </tbody>
            <tbody>
                <tr>
                    <th scope="row">2</th>
                    <td>Luis Antonio</td>
                    <td>P</td>
                    <td>85</td>
                    <td><a class="btn btn-primary" button>Editar</a></td>
                    <td><a class="btn btn-danger" button>Eliminar</a></td>
                </tr>

            </tbody>
        </table>
    </div>
</div>