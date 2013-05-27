<!--content-->
<div class="tail-content clear">
    <div class="main">
        <div class="wrapper-left clear">
            <div class="wrapper-right clear">
                <div id="content">
                    <div class="clear">
                        <!--left-->
                        <div id="left" class="equal">
                            <div class="clear">	
                                <div class="clear wrapper-box module s4">
                                    <div class="box-indent">
                                        <div class="clear">
                                            <form action="index.php" method="post">
                                                <div class="search s4">
                                                    <div class="search-input"><input name="searchword" id="mod_search_searchword" maxlength="20" alt="Search" class="inputbox s4" size="20" value="search..." onblur="if(this.value=='') this.value='search...';" onfocus="if(this.value=='search...') this.value='';" type="text"></div>
                                                    <div class="search-button">	</div>                                                    
                                                </div>
                                                <input name="task" value="search" type="hidden">
                                                <input name="option" value="com_search" type="hidden">
                                            </form>                
                                        </div>
                                    </div>	 
                                </div>                                
                                <div class="clear wrapper-box module_menu">
                                    <div class="box-indent">
                                        <div class="clear">
                                            <ul class="menu">
                                                <li id="current" class="active item1"><a href="<?php echo $this->Html->url(array('controller' => '/')); ?>"><span>Home</span></a></li>
                                                <li class="item65"><a href="<?php echo $this->Html->url(array('action' => 'quem-somos', 'controller' => '/')); ?>"><span>Quem Somos</span></a></li>
                                                <li class="item22"><a href="<?php echo $this->Html->url(array('action' => 'servicos', 'controller' => '/')); ?>"><span>Serviços</span></a></li>
                                                <li class="item61"><a href="<?php echo $this->Html->url(array('action' => 'cursos', 'controller' => '/')); ?>"><span>Cursos</span></a></li>
                                                <li class="item70"><a href="<?php echo $this->Html->url(array('action' => 'artigos', 'controller' => '/')); ?>"><span>Artigos</span></a></li>
                                                <li class="item63"><a href="<?php echo $this->Html->url(array('action' => 'na-midia', 'controller' => '/')); ?>"><span>Na Mídia</span></a></li>
                                                <li class="item67"><a href="<?php echo $this->Html->url(array('controller' => '/receitas')); ?>"><span>Receitas</span></a></li> 
                                                <li class="item67"><a href="<?php echo $this->Html->url(array('controller' => '/noticias')); ?>"><span>Notícias</span></a></li> 
                                                <li class="item64"><a href="<?php echo $this->Html->url(array('action' => 'blog', 'controller' => '/')); ?>"><span>Blog</span></a></li>
                                                <li class="item66"><a href="<?php echo $this->Html->url(array('controller' => '/parceiros')); ?>"><span>Parceiros</span></a></li>
                                                <li class="item67"><a href="<?php echo $this->Html->url(array('controller' => '/links')); ?>"><span>Links</span></a></li>                                                 
                                                <li class="item66"><a href="<?php echo $this->Html->url(array('action' => 'contato', 'controller' => '/')); ?>"><span>Contato</span></a></li>
                                                <li class="item65"><a href="<?php echo $this->Html->url(array('controller' => '/trabalhe-conosco')); ?>"><span>Trabalhe Conosco</span></a></li>
                                            </ul>                
                                        </div>
                                    </div>	 
                                </div>
                                <div class="clear wrapper-box module sociais fb">
                                    <div>Encontre-nos no Facebook</div>
                                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FSa%25C3%25BAde-Viver-Consultoria-em-Nutri%25C3%25A7%25C3%25A3o%2F177191232358883&amp;width=237&amp;height=305&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23999999&amp;stream=false&amp;header=false&amp;appId=223268531066585" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:237px; height:305px;" allowTransparency="true"></iframe>
                                </div>
                                <div class="clear wrapper-box module sociais tw"> 
                                    <div>Siga-nos no Twitter</div>
                                    <a href="https://twitter.com/SaudeViver" class="twitter-follow-button" data-show-count="false" data-lang="pt" data-size="200">Siga @SaudeViver</a>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                </div>
                                <div class="clear wrapper-box module sociais yt"> 
                                    <div>Nosso Canal no YouTube</div>
                                    <?php echo $html->image('youtube.png', array('url' => 'http://www.youtube.com/SaudeViverVideos')); ?>
                                </div>                                
                            </div>
                        </div>
                        <!--center-->
                        <div id="container" class="equal">
                            <div class="clear">