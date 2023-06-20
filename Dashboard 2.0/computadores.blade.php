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
            <img class="Logo" src="{{asset("IMG/ds.png")}}" >
            <h1 class="Logotitulo">J.A Computadores</h1>
        </div>
        <div class="MenuLogo">
            <nav>
                <li>
                    <a class="selecc" href="#" style="text-decoration: none;">
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
            <h1>Computadores para mantenimiento</h1>
    </section>

    <section class="formulario">
        <div class="fond1">
            <div class="text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Registrar equipo
  </button>
            </div>
            <br>
            <br>
            <br><br>
            <table class="table">
                <thead>
                  <tr>
                    
                    <th scope="col">#</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Fecha-llegada</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="seguimiento.html">1</a></th>
                    <td>1003944567</td>
                    <td>Diego Mendoza</td>
                    <td>3059295421</td>
                    <td>HP</td>
                    <td>14/05/23</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="seguimiento.html">2</a></th>
                    <td>1099356789</td>
                    <td>Daniela Conejo</td>
                    <td>3212371506</td>
                    <td>Apple</td>
                    <td>29/05/23</td>
                    
                  </tr>
                  <tr>
                    <th scope="row"><a href="seguimiento.html">3</a></th>
                    <td>1022934334</td>
                    <td>Steban Lopez</td>
                    <td>3096789950</td>
                    <td>Asus</td>
                    <td>26/11/23</td>
                    
                  </tr>
                </tbody>
              </table>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de computadores</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Documento del cliente</label>
                      <input type="number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nombre</label>
                      <input type="text" required class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Teléfono</label>
                        <input type="number" required class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Marca del equipo</label>
                        <input type="text" required class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tipo de mantenimiento</label>
                        <input type="text"  required class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Fecha de llegada</label>
                        <input type="date" required class="form-control" id="exampleInputPassword1">
                      </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button class="btn btn-primary">Registrar equipo</button></form>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    
</body>
</html>