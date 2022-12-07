<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        
    .gradient-custom-2 
    {
    /* fallback for old browsers */
    background: #052e3d;
    /* Chrome 10-25, Safari 5.1-6 */
    background: #052E3D;
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: #052E3D;
    }
      @media (min-width: 500px)
    {
      .gradient-form 
    {
      height: 100vh !important;
    }
    }
       @media (min-width: 500px) 
    {
      .gradient-custom-2 {
       border-top-right-radius: .3rem;
       border-bottom-right-radius: .3rem;
    }
    }
       .ColorGris
    {
      background-color: #3D3D3D;
}
.Orientacion
{
    text-align: left;
}
.imageWave
{
  background-image: url("https://forospyware.com/images/emoji/twitter/wave/3.png");
}
.imagenFace
{
  background-image: url("https://cdn-icons-png.flaticon.com/512/4406/4406234.png");

}
</style>
  </head>
  <body>
    <section class="h-100 gradient-form" style="background-color: white;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
              <div class="card rounded-3 text-white">
                <div class="row g-0">
                  <div class="col-lg-8 ColorGris">
                    <div class="card-body p-md-4 mx-md-10">
      
                    <div>
                        <h1 class="Orientacion" style="color:white;">¡Hola!</h1>
                        <h4 style="color: white; text-align:left;">Vamos a crear tu cuenta</h4>
                      </div>
      
                      <form action = "coneccion.php" method ="post"> 
                        <div class="form-outline mb-4">
                            <input type="Email" id = "formWhite" name="FormCorreo" class="form-control" required placeholder="Correo Electronico">
                            <label class="form-label">Nunca se mostrará al publico</label>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="User" name ="FormUser" class="form-control" required placeholder="Usuario" />
                          <label class="form-label">único, sin espacios y corto</label>
                        </div>
                        <div class="form-outline mb-4">
                          <input type="text" name= "FormNombre" class="form-control" required placeholder="Nombre" />
                          <label class="form-label">Tu nombre completo</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name= "FormContraseña" class="form-control" required placeholder="Contraseña" />
                          <label class="form-label">debe tener al menos 10 caracteres</label>
                        </div>
      
                        <div class="text-right pt-1 mb-5 pb-1">
                          <button class="btn btn-primary fa-lg gradient-custom-2 mb-2">Crear tu cuenta</button>
                          <button class="btn btn-link text-muted mb-2" href="#!">Inicia sesion</button>
                          <p>
                          <a>Al registrarte aceptas</a> <a href="https://forospyware.com/privacy">la Política de privacidad </a> y los <a href="https://forospyware.com/tos">Términos de servicio.</a>
                          </p>    
                        </div>
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-4 d-flex align-items-center gradient-custom-2">
                    <div class="text-white mx-md-2">
                      <div class="text-right pt-1 mb-5 pb-1">
                        
                        <a href="https://www.facebook.com/">
                        <button class="btn btn-light mb-4">
                          <img src="https://cdn-icons-png.flaticon.com/512/4406/4406234.png" alt="Facebook" width="30"> 
                          Iniciar sesión con Facebook
                        </button>
                      </a>
                        
                      <a href="https://www.google.com/intl/es/account/about/">
                        <button class="btn btn-light mb-4">
                        <img src="data:image/jpeg;base64,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" 
                        alt="" width="30">  Iniciar sesión con Google
                        </button></a>
                        
                       <a href="https://twitter.com/i/flow/signup">
                        <button class="btn btn-light mb-4">
                         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Twitter-logo.svg/800px-Twitter-logo.svg.png" alt="" width="30"> Iniciar sesión con Twitter
                        </button></a>
                                              
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>