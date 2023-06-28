<div class="text-center container">

  <div class="form-signin w-100 m-auto mt-5 ">
    <form>

      <img class="mb-4 img-fluid" src="assets/img/diente.png" alt="" width="72" height="57">
      <div class="row  text-center mb-3 ">
        <h1 class="h3 mb-3 fw-normal">Iniciar sesion</h1>
        <div class="col-sm-4 "></div>
        <div class=" col-sm-4 ">
          <div class="form-floating">
            <input type="email" class="form-control" autocomplete="off" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
        </div>
        <div class="col-sm-4 "></div>
      </div>
      <div class="row text-center mb-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <div class="form-floating">
            <input type="password" autocomplete="off" class="form-control" id="floatingPasswor" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <div class="row  text-center mt-2 ">
          <div class="col-sm-5"></div>
          <div class="col-sm-2">
            <button class="w-100 btn btn-lg btn-success" onclick="login(2,$('#floatingInput').val(),$('#floatingPasswor').val()); return false;" type="submit">Sign in</button>
          </div>
          <div class="col-sm-5"></div>
        </div>
      </div>

    </form>
  </div>
  <div id="messageerror"></div>



</div>