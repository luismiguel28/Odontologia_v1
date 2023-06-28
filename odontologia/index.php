<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='assets/css/signin.css'>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
</head>
<style>
  .nav-link.active {
  border-bottom: 2px solid #40cfff;
  font-weight: bold;
  color:  red;
  }
  .navbar-nav .nav-link.active, .navbar-nav .show>.nav-link {
    color: #40cfff;
}
.negrita {
  font-weight: bold;
  }

  .ll {
    text-align: left;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
   
  }
  .ll p, ul{
    text-align: left;
    font-size: 13pt;
    color:#666666;
  }
  .ll b, h6{
    color: #a9a9a9;
    font-size: 13pt;
  }
  .ll h2{
    color: #40cfff;
    font-size: 20pt;
  }
  @media (max-width: 768px) {
    .nav-link.active {
  border-bottom: none;
  font-weight: bold;
  color:  red;
  }
}

/* Estilos para pantallas medianas */
@media (min-width: 769px) and (max-width: 1024px) {
  .nav-link.active {
  border-bottom: none;
  font-weight: bold;
  color:  red;
  }
}

</style>
<body onload="validar(10);">
  <nav class="navbar bg-white navbar-expand-lg bg-light">
    <div class="container-fluid ">
      
      <a class="mr-5 navbar-brand" href="#"><img src="assets/img/img2.JPG" alt="" class="img-fluid"></a>
      <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse   navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav    ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item  ">
            <a class="nav-link  negrita active " aria-current="page" href="#" onclick="setActiveNavItem(this); validar(10);">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link negrita" href="#" onclick="setActiveNavItem(this); validar(11);"  >Proteje tus dientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link negrita" href="#" onclick="setActiveNavItem(this);" >Contactanos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link negrita" href="#" onclick=" setActiveNavItem(this); validar(1);" >Iniciar Secion</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
  <div class="container" id="contenido">

  </div>


</body>
<script>
  function setActiveNavItem(u) {
    var navItems = document.getElementsByClassName('nav-link');
  for (var i = 0; i < navItems.length; i++) {
    navItems[i].classList.remove('active');
  }
  
  // Agrega la clase 'active' solo al elemento de navegación correspondiente
  u.classList.add('active');
  }
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/funciones.js"></script>

</html>