<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-success is-outlined" href="#modal-sections" uk-toggle>
            <strong>Sign up</strong>
          </a>
          <a href="login.php" href="#modal-sections" uk-toggle class="button is-danger is-outlined">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>


<div id="modal-sections" uk-modal>
                      <div class="uk-modal-dialog uk-modal-body">
                          <h2 class="uk-modal-title">Criar Conta</h2>
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
