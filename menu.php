<!-- <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="index.php">Inicio</a></li>
          </ul>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="login.php">Entrar ou Cadastrar-se</a></li>
          </ul> 
        </div>
    </nav>
</div> -->
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
            <a class="uk-navbar-toggle" uk-toggle="target: #offcanvas-overlay">
              <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left" type="button">Menu</span>
          </a>
          </ul>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            
          </ul> 
        </div>
    </nav>
</div>    

<div id="offcanvas-overlay" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-width-medium">

        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class="uk-grid-small uk-flex-middle uk-margin" uk-grid>
            <div class="uk-width-expand">
                <p class="uk-text-lead uk-text-bolder uk-text-center">Entrar ou Crie uma conta</p>
            </div>
        </div>  
        <div class="left-nav-wrap">
        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
        <li><p class="uk-text-bolder uk-text-justify"> Com uma conta no CAVI você vai poder cadastrar seus imoveis que estao a vendo ou alugando, de GRAÇA</p></li>
        <li class="uk-active"><a href="login.php">Entrar ou Cadastrar-se</a></li>
      </ul>   
    </div>
  </div>
</div>
