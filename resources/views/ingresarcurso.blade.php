<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importación de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    @include('includes.navbar')
    <sectiom>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4 class="mb-3">Ingresa un nuevo curso</h4>
                    <form>
                        <div class="mb-3">
                            <label for="nombrecurso" class="form-label">Nombre del curso</label>
                            <input type="text" class="form-control" id="nombrecurso" aria-describedby="emailHelp">
                            <div id="ayudacurso" class="form-text">Utiliza nombres representativos.</div>
                        </div>
                        <div class="mb-3">
                            <label for="urlcurso" class="form-label">URL de la imagen del curso</label>
                            <input type="text" class="form-control" id="urlcurso">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="descripcion">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terminos">
                            <label class="form-check-label" for="terminos">Acepto términos y condiciones</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>

            </div>

        </div>

        </section>
        @include('includes.footer')
</body>

</html>