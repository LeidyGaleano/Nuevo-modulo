<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset("https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet")}}">
    <link rel="stylesheet" href="{{asset("CSS/Style.css")}}">
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous")}}">
    <title>dashboard</title>
</head>
<body>
    <section class="Izquierda" id="Izquierda">
        <div class="M"> 
            <img class="Logo" src="{{asset("IMG/ds.png")}}">
            <h1 class="Logotitulo">J.A Computadores</h1>
        </div>
        <div class="MenuLogo">
            <nav>
                <li>
                    <a class="selecc" href="{{asset("#" style="text-decoration: none;")}}">
                        <i class='bx bxs-home' style='color:#ffffff'  ></i>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li>
                    <a class="selecc" href="{{asset("Index.html" style="text-decoration: none;")}}">
                        <i class='bx bxs-user-circle' style='color:#ffffff' ></i>
                        <span class="text">Usuarios</span>
                    </a>
                </li>
                <li>
                    <a class="selecc" href="{{asset("ventas.html" style="text-decoration: none;")}}">
                        <i class='bx bxs-shopping-bag' style='color:#ffffff'  ></i>
                        <span class="text">Tienda</span>
                    </a>
                </li>
                <li>
                    <a class="selecc" href="{{asset("inventario.html" style="text-decoration: none;")}}">
                        <i class='bx bxs-book' style='color:#ffffff'  ></i>
                        <span class="text">Inventario</span>
                    </a>
                </li>
                <li>
                    <a class="selecc" href="{{asset("garantias.html" style="text-decoration: none;")}}">
                        <i class='bx bxs-shield' style='color:#ffffff' ></i>
                        <span class="text">Garantias</span>
                    </a>
                </li>
            </nav>
        </div>
        <div class="login">
            <img class="loginfoto" src="{{asset("IMG/Perfil.jpg")}}">
            <h2 class="logintext">Daniel<br>Admin</h2>
            <img class="loginflecha" src="{{asset("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKxJREFUSEvtk9ENwjAMRF83YJN2BJiIEUo36EYwAmzCCOgkkEIax85HJZDirza63rMv7sDONezsTwe4CfeIfj+iC7ACT6PVA3AGFmuU2iXLfAbuwKkAkfkVmN4A6TdVA8jgBowFSGr+AI7WlN6aliDq8tN51VxCDyBNDtGZYnHNo4AcoveQeQsghejZzDy/5UhE6TeKS2WtbdMWuX9pRNA6QcTzS9MBbmT/H9ELPngdGfgDn7kAAAAASUVORK5CYII="/)}}">
        </div>
    </section>

    <section class="Centro" id="Centro">
        <div class="header">
            <h1>Seguimieto final - ficha técnica</h1>
    </section>

    <section class="formulario">
        <div class="fond1">
            <div class="confirmar">
                <h2>Registrar</h2>
            </div>
            <br>
            <br>
            <br><br>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Computador</th>
                    <th scope="col">Llegada</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Diego Mendoza</td>
                    <td>HP</td>
                    <td>14/05/23</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ver detalles
                      </button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Daniela Conejo</td>
                    <td>Apple</td>
                    <td>29/05/23</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ver detalles
                      </button></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Steban Lopez</td>
                    <td>Asus</td>
                    <td>26/11/23</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ver detalles
                      </button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Entrega final</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ficha tecnica:</label>
                    <h5>29052023</h5> 
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Tipo de mantenimiento</label>
                  <input type="text" required class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fecha de entrega</label>
                    <input type="date" required class="form-control" id="exampleFormControlInput1" placeholder="Fecha de entrega">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Total a pagar</label>
                    <input type="number" required class="form-control" id="exampleFormControlInput1" placeholder="Total a pagar">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción de fallas</label>
                    <textarea class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button class="btn btn-primary">Enviar</button></form>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
</body>
</html>