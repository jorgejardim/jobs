<pre>
<?php
print_r($_POST);
print_r($_GET);
?>
﻿</pre>
<hr />
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
Votação:
<table border=1>

<tr>
<td>João</td>
<td>Maria</td>
<td>José</td>
<td>Antônio</td>
</tr>
<tr>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=1" layout="button_count" show_faces="false" width="100"></fb:like></td>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=2" layout="button_count" show_faces="false" width="100"></fb:like></td>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=3" layout="button_count" show_faces="false" width="100"></fb:like></td>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=4" layout="button_count" show_faces="false" width="100"></fb:like></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>Ana</td>
  <td>Paula</td>
  <td>Geraldo</td>
  <td>Marcos</td>
</tr>
<tr>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=5" layout="button_count" show_faces="false" width="100"></fb:like></td>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=6" layout="button_count" show_faces="false" width="100"></fb:like></td>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=7" layout="button_count" show_faces="false" width="100"></fb:like></td>
  <td><fb:like href="http://www.facebook.com/pages/Jorge-Jardim/228970260492451?sk=app_223268531066585&voto=8" layout="button_count" show_faces="false" width="100"></fb:like></td>
</tr>

</table>

<hr />

<script>
function fbs_click() {
	u='http://www.conteudodinamico.com.br';
	t='Compartilhar do Jorge';
	window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');
	return false;
}
</script>
<a rel="nofollow" href="#" onclick="return fbs_click()" target="_blank">Compartilhar</a>

<hr />



 
    <fb:serverFbml style="width: 500px;">
        <script type="text/fbml">
            <fb:fbml>
 
                    <fb:is-logged-out>
                        <fb:else>
                            <fb:request-form content="Convide seus amigos!! Um outro texto qualquer. &lt;fb:req-choice url='http://conteudodinamico.com.br' label='Convide!' /&gt;" type="jorge" invite="true" method="POST" action="http://conteudodinamico.com.br">
                                <fb:multi-friend-selector showborder="false" cols="3" rows="3" exclude_ids="721781462" actiontext="Convide seus amigos"></fb:multi-friend-selector>
                            </fb:request-form>
                        </fb:else>
                    </fb:is-logged-out>
 
            </fb:fbml>
        </script>
    </fb:serverFbml>














