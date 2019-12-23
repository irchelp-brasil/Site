<!DOCTYPE html>
<html lang="pt-br">
  <head>
          <?php                         
            if( $_GET['go'] != ""){              
              $pag = $_GET['go'];
                if(file_exists("$pag.html")){
                  include"$pag.html"; }
                else{
                  include '404.html'; }}
            else{
              include "home.html";}
          ?>     
  </head>
  <body>
    <div id="main">
      <header class="mainHeader">
        <div id="caixa">
          <div id="topo">
            <div id="logo"><a href="/"><img src="/images/logo.jpg" alt="Início"></a></div>
            <!--<div class="txt_branco"; style="padding-right:02px; font-size:10px;">
              <form action="/busca" method="get">
                <input type="search" name="q" class="form-control" placeholder="Buscar por..." required>
                <button type="submit" class="btn btn-custom"><i class="fa fa-search"></i></button>
              </form>
            </div>-->
            <div class="links_b" style="padding-right:02px; font-size:10px;"><a href="/" target="_self">PORTUGUÊS</a></div>
            <div class="txt_branco" style="padding-right:02px; font-size:10px;">|</div>
            <div class="links_b" style="padding-right:15px; font-size:10px;"><a href="./english/" target="_self">ENGLISH</a></div>
            <div style="padding-right:02px;"><a href="https://github.com/irchelp-brasil/" target="_blank" rel="noopener noreferrer"><img src="/images/git.png" alt="Repositório Github"></a></div>
            <div><a href="https://creativecommons.org/licenses/by-sa/4.0/deed.pt_BR" target="_blank" rel="noopener noreferrer"><img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a><br /></div>
          </div>          
        </div>
        <input id="btn-menu" type="checkbox"> <label for="btn-menu">☰</label>
        <nav class="menu">
          <ul>
            <li><a href="/">Início</a></li>            
            <li><a href="/znc">ZNC</a></li>
            <li><a href="/webchat">WebChat</a></li>
            <li><a href="/redes">Redes</a></li>
            <li><a href="/downloads">Downloads</a></li>
            <li><a href="/tutoriais">Tutoriais</a></li>
            <li><a href="/comandos">Comandos</a></li>
            <li><a href="/scripts">Scripts</a></li>
            <li><a href="/artigos">Artigos</a></li>
            <li><a href="/fotos">Fotos</a></li>
            <li><a href="/contato">Contato</a></li>
            <li><a href="/projetos">Projetos</a></li>
            <li><a href="/sobre">Sobre</a></li>            
          </ul>
        </nav>
      </header>
      <div class="mainBot">
        <div style="margin-top: 0px; background-color: #CCCCCC; height: 5px; border-top: 1px solid white; border-bottom: 1px solid #CCCCCC"></div>
        <div style="margin-top: 12px; background-color: white; height: 6px; border-top: 1px solid black; border-bottom: 1px solid #CCCCCC"></div>
      </div>
      <div class="mainContent">
        <div class="links">
          
          <?php                         if( $_GET['go'] != ""){
                            $pag = $_GET['go'];                            if(file_exists("$pag.php")){
                                include"$pag.php"; }                            else{
                                include '404.php'; }}                        else{
                            include "home.php";                            }
                        ?> </div>
      </div>
      <footer class="mainFooter links_b">        
        <div id="rodape">
          <div id="cx_banners">
            <div class="banner"><a href="https://letsencrypt.org/pt-br/" target="_blank" rel="noopener noreferrer"><img alt="Banner Lets Encrypt" src="/images/banner_1.png"></a></div>
            <div class="banner"><a href="https://br.creativecommons.org/" target="_blank" rel="noopener noreferrer"><img alt="Banner Creative Commons" src="/images/banner_2.png"></a></div>
            <div class="banner"><a href="http://dnsbllookup.com/" target="_blank" rel="noopener noreferrer"><img alt="Banner DNSBL Lookup" src="/images/banner_3.png"></a>
            </div>           
          </div>
          <div id="cx_sitemap">
            <div id="cx_itens_01">
              <div class="cx_itens_02"><a href="/znc"
            target="_self">ZNC</a>
                <div class="txt_sitemap"><a href="/solicitar"
            target="_self">Solicitar</a></div>
                <div class="txt_sitemap"><a href="https://znc.irchelp.com.br:8081"
            target="_blank" rel="noopener noreferrer">Console</a></div>
                <div class="txt_sitemap"><a href="/znc"
            target="_self">ZNC's Free</a></div>
              </div>
              <div class="cx_itens_02"><a href="/webchat"
            target="_self">WebChat</a>
                <div class="txt_sitemap"><a href="/kiwiirc"
            target="_self">KiwiIRC</a></div>
                <div class="txt_sitemap"><a href="/mibbit"
            target="_self">Mibbit</a></div>
                <div class="txt_sitemap"><a href="/lightirc"
            target="_self">LightIRC</a></div>
              </div>
              <div class="cx_itens_02"><a href="/redes"
            target="_self">Redes</a>
                <div class="txt_sitemap"><a href="/redes"
            target="_self">Brasileiras</a></div>
                <div class="txt_sitemap"><a href="/redes#ancor_extrangeiras"
            target="_self">Estrangeiras</a></div>
                <div class="txt_sitemap"><a href="/redes#ancor_outras"
            target="_self">Outras</a></div>
              </div>
              <div class="cx_itens_02"><a href="/downloads"
            target="_self">Downloads</a>
                <div class="txt_sitemap"><a href="https://github.com/snoonetIRC/CloudBot"
            target="_blank" rel="noopener noreferrer">Bot cloudbot</a></div>
                <div class="txt_sitemap"><a href="https://github.com/Dissimulate/SubWatch"
            target="_blank" rel="noopener noreferrer">Bot subwatch</a></div>
                <div class="txt_sitemap"><a href="https://znc.in/"
            target="_blank" rel="noopener noreferrer">ZNC</a></div>
              </div>
              <div class="cx_itens_02"><a href="/tutoriais"
            target="_self">Tutoriais</a>
                <div class="txt_sitemap"><a href="/tutoriais"
            target="_self">IRC</a></div>
                <div class="txt_sitemap"><a href="/tutoriais#ancor_video"
            target="_self">Web - vídeo</a></div>
                <div class="txt_sitemap"><a href="/tutoriais#ancor_artigos"
            target="_self">Web - texto</a></div>
              </div>
              <div class="cx_itens_02"><a href="/comandos"
            target="_self">Comandos</a>
                <div class="txt_sitemap"><a href="http://www.geekshed.net/"
            target="_blank" rel="noopener noreferrer">IRC</a></div>
                <div class="txt_sitemap"><a href="https://cservice.undernet.org/docs/"
            target="_blank" rel="noopener noreferrer">UnderNet</a></div>
                <div class="txt_sitemap"><a href="http://quakenet.blogspot.com/"
            target="_blank" rel="noopener noreferrer">QuakeNet</a></div>
              </div>
              <div class="cx_itens_02"><a href="/scripts" target="_self">Scripts</a>
                <div class="txt_sitemap"><a href="/scripts" target="_self">Windowns</a></div>
                <div class="txt_sitemap"><a href="/scripts" target="_self">Linux</a></div>
                <div class="txt_sitemap"><a href="/scripts" target="_self">Android</a></div>
              </div>
              <div class="cx_itens_02"><a href="/fotos" target="_self">Fotos</a> 
                <div class="txt_sitemap"><a href="http://www.virtualife.com.br/novo/fotos/usuarios"
            target="_blank" rel="noopener noreferrer">Rede Virtualife</a></div>                
                <div class="txt_sitemap"><a href="https://www.brasvip.org/fotos-usuarios/"
            target="_blank" rel="noopener noreferrer">Rede Brasvip</a></div>
                <div class="txt_sitemap"><a href="https://brazil-undernet.webnode.com/"
            target="_blank" rel="noopener noreferrer">Rede UnderNet</a></div>
              </div>              
            </div>
          </div>
          <div id="barra_rodape">
            <div id="item_barra">© 2018-2019 -&nbsp;<a href="/contato">Contato</a>&nbsp;-&nbsp;
              <a href="/pu">Política de utilização</a> &nbsp;- Mídias Sociais:
              <a href="https://fb.me/irchelp.com.br" target="_blank" rel="noopener noreferrer"><img alt="Ícone Facebook" src="/images/facebook.png"></a>
              <a href="#"><img alt="Ícone Twitter" src="/images/twitter.png"></a>              
            </div>
            <div id="validation">
                <a href="http://jigsaw.w3.org/css-validator/validator?uri=https://www.irchelp.com.br" target="_blank" rel="noopener noreferrer" class="img_css" title="Validador CSS">CSS</a> 
                <a href="http://validator.w3.org/check?uri=https://www.irchelp.com.br" target="_blank" rel="noopener noreferrer" class="img_html" title="Validador HTML 5.0">HTML</a>
            </div>
          </div>
        </div>
      </footer>
    </div>    
  </body>
</html>
