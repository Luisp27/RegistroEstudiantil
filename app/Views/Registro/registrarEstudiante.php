<br />
<div class="container">

    <div class="card-body">
        <div class="card text-center"  style="background-color: #071F77; width: 80%;">
            <div class="card-header" style="background-color: #00020A;">
                <ul class="nav nav-tabs card-header-tabs">
                    <h3 style="color: #fff;">Registro Escolar</h3>
                </ul>
            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="<?= base_url('#') ?>">Inicio</a>
            </div>
        </div>
        <div class="card" style="width: 80%;">
            <div class="card-body" style="background-color: #00020A;">
                <h5 class="card-title" style="color: #054CFC;">Registrar estudiante</h5>
                <form class="row g-3">
                    <div class="input-group">
                        <span class="input-group-text">Nombre y Apellido</span>
                        <input type="text" aria-label="Nombre" class="form-control">
                        <input type="text" aria-label="Apellido" class="form-control">
                    </div>
                    </select>
                    <br />

                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label" style="color: #054CFC;">Subir imagen del estudiante</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                    <br />

                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #054CFC;">Practicas</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #054CFC;">Primer parcial</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #054CFC;">Segundo parcial</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label" style="color: #054CFC;">Examen</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <br />

                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label" style="color: #054CFC;">Asistencia</label>
                        <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="" style="color: #054CFC;">Asistencia</option>
                            <option value="1" style="color: #054CFC !important;">P</option>
                            <option value="2" style="color: #FC1405 !important;">A</option>
                        </select>
                        <br />

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>