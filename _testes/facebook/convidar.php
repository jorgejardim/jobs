<style type="text/css">
<!--
body {
	background-color: #6C9;
}
-->
</style>


<div id="fb-root"></div> 
<script type="text/javascript"> 
  window.fbAsyncInit = function() {
    FB.init({appId: "223268531066585", status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/pt_BR/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script> 
<fb:serverFbml>
    <script type="text/fbml">
        <fb:fbml>

                <fb:is-logged-out>
                    <fb:else>
                        <fb:request-form content="Testando envio de convite para o sorteio da Universidade!!!" type="jorge" invite="true" method="POST" action="http://www.conteudodinamico.com.br/facebook/resposta.php">
                            <fb:multi-friend-selector target="_self" showborder="true" cols="3" rows="3" actiontext="Tudo é Possível Meus Queridos!!! rs"></fb:multi-friend-selector>
                        </fb:request-form>
                    </fb:else>
                </fb:is-logged-out>

        </fb:fbml>
    </script>
</fb:serverFbml>














