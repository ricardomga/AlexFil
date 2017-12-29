<nav class="mainmenu-area blue-menu stricky">
  <div class="thm-container">
    <div class="nav-holder clearfix">
      <div class="nav-footer pull-left">
        <ul class="nav">
          <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="/">Inicio</a>
          </li>
          <li class="{{ Request::is('sobre-nos') ? 'active' : '' }}">
            <a href="/sobre-nos">Sobre nós</a>
          </li>
          <li class="has-submenu {{ Request::is('servicos') ? 'active' : '' }}">
            <a href="/servicos">Serviços</a>
						<ul class="submenu">
							<li><a href="/marcacoes/pedir">Marcar Serviço</a></li>
							<li><a href="/orcamentos/pedir">Pedir Orçamento</a></li>
						</ul>
          </li>
          <li class="{{ Request::is('galeria') ? 'active' : '' }}">
            <a href="/galeria">Galeria</a>
          </li>
          <li class="{{ Request::is('stand') ? 'active' : '' }}">
            <a href="/">Stand</a>
          </li>
          <li class="{{ Request::is('contactos') ? 'active' : '' }}">
            <a href="/contactos">Contactos</a>
          </li>
        </ul>
      </div>
      <div class="nav-header pull-right">
        <ul>
          <li class="menu-expander"><button><i class="fa fa-bars"></i></button></li>
          <li>
            <button><i class="icon icon-Search"></i></button>
	          <ul class="search-box">
              <li>
		            <form action="#">
		              <input type="text" placeholder="Pesquisar">
		              <button type="submit"><i class="icon icon-Search"></i></button>
		            </form>
              </li>
            </ul>
	        </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
