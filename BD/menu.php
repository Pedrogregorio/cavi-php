
<div uk-sticky="uk-navbar-primary sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar ">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

         <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="index.php">Inicio</a></li>
            <li class="uk-position-right"><?php 
                if (isset($_SESSION['email'])) {
               ?>
                <a href="admin.php">Cadastra Imoveis</a>
              <?php }else{ ?>
                <a href="includes/processos_php/Conlogin.php">Cadastra Imoveis</a>
              <?php } ?>
            </li>
        </ul>            

        </div>
    </nav>
</div>
                 