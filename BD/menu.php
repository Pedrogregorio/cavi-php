<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-navbar-container uk-navbar-danger" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">
         <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="index.php">Inicio</a></li>
            <li class="uk-navbar-right">
              <?php 
                if (isset($_SESSION['email'])) {
              ?>
                <a href="admin.php">Cadastra Imoveis</a>
              <?php
                }else{ 
              ?>
                <a href="includes/processos_php/Conlogin.php">Cadastra Imoveis</a>
              <?php 
                } 
              ?>
            </li>
            <li class="uk-navbar-left">
              <form class="uk-search uk-search-default" method="get" action="index.php">
                  <span uk-search-icon></span>
                  <input class="uk-search-input" type="search" placeholder="Search..." name="filtro">
              </form>
            </li>
        </ul>            
        </div>
    </nav>
</div>                 