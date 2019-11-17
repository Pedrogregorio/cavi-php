
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar ">
    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
        <div class="uk-navbar-left">

         <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="index.php">Inicio</a></li>
            <li>
                <a href="includes/processos_php/Conlogin.php">Cadastra Imoveis</a>
            </li>
        </ul>            

        </div>
    </nav>
</div>
                  <div id="modal-sections2" uk-modal>
                      <div class="uk-modal-dialog uk-modal-body">
                          <h2 class="uk-modal-title">Efetuar Login</h2>
                            <div class="uk-card-body">
                              <form>
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon:  user"></span>
                                    <input class="uk-input uk-form-large" placeholder="Nome" type="text"  maxlength="40" name="nome" placeholder="Nome" required>
                                  </div>
                                </div>
                                 <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon:  mail"></span>
                                    <input class="uk-input uk-form-large" placeholder="Email" type="text" maxlength="50" name="email" placeholder="Email" required>
                                  </div>
                                </div>
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-large" placeholder="Senha"  type="password" maxlength="20" name="senha" placeholder="Password" required>  
                                  </div>
                                </div>
                                 <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-large" placeholder="Telefone"  type="tel" maxlength="10" name="telefone" placeholder="Numero de Celular" required>  
                                  </div>
                                </div>
                                <div class="uk-margin">
                                  <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                    <input class="uk-input uk-form-large" placeholder="Telefone"  type="number" maxlength="10" name="cpf" placeholder="CPF" required>  
                                  </div>
                                </div>
                              </form>
                            </div>
                          <p class="uk-text-right">
                              <button class="uk-button uk-button-default uk-modal-close" type="button">Fechar</button>
                              <button class="uk-button uk-button-success" type="button">Criar Conta</button>
                          </p>
                      </div>
                  </div>