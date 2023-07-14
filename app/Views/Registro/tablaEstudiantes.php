<br />
<br />

<!-- tabla 1 -->
<div class="container">

    <div class="card text-center">
        <div class="card-header" style="background-color: #00020A;">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= base_url('AsistenciaCalificaciones') ?>">Asistencia y Calificaciones</a>
                </li>
            </ul>
        </div>
        <br />
        <div class="card text-center" style="background-color: #071F77;">
            <div class="card-header" style="background-color: #00020A;">
                <ul class="nav nav-tabs card-header-tabs">
                    <h3 style="color: #fff;">Registro estudiantil</h3>
                </ul>
            </div>
            <div class="card-body">

                <h2 style="color: #fff;">Buscar estudiante</h2>
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
                <h5 class="card-title" style="color: #fff;">Registro estudiantil</h5>
                <a class="btn btn-primary" href="<?= base_url('registrarEstudiante') ?>">Agregar estudiante</a>
            </div>
        </div>
        <br />
        <table class="table table-dark table-striped">
            <!-- parte superior de la tabla -->
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Editar</th>
                    <th scope="col">eliminar</th>

                </tr>
            </thead>

            <!-- nombre -->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark Michael</td>
                    <td><a class="btn btn-primary" button>Editar</a></td>
                    <td><a class="btn btn-danger" button>Eliminar</a></td>
                </tr>

            </tbody>
            <tbody>
                <tr>
                    <th scope="row">2</th>
                    <td>Luis Antonio</td>
                    <td><a class="btn btn-primary" button>Editar</a></td>
                    <td><a class="btn btn-danger" button>Eliminar</a></td>
                </tr>

            </tbody>
        </table>
    </div>
    <br />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myList tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>