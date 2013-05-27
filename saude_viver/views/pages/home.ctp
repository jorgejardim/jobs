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
                                <div class="clear wrapper-box module-login">
                                    <div class="box-title png">
                                        <h3>Falamos com Você</h3>
                                        <p>Por favor, preencha os dados abaixo que em breve entraremos em contato.</p>
                                    </div>
                                    <div class="box-indent">
                                        <div class="clear">
                                            <form action="" method="post" name="login" class="form-login">
                                                <label for="mod_login_username">Nome</label>
                                                <input name="data[Lead][nome]" id="mod_login_username" class="inputbox" alt="Username" type="text">
                                                <label for="mod_login_password telefone">Telefone</label>
                                                <input id="mod_login_password" name="data[Lead][telefone]" class="inputbox telefone" alt="Password" type="text"><br>
                                                <label for="mod_login_password">E-mail</label>
                                                <input id="mod_login_password" name="data[Lead][email]" class="inputbox" alt="Password" type="text"><br>
                                                <label for="mod_login_password">Interesse</label>
                                                <select name="data[Lead][interesse]">
                                                    <option value=""></option>
                                                    <option value="Consultoria">Consultoria</option>
                                                    <option value="Cursos">Cursos</option>                                                    
                                                </select>
                                                <br>                                                
                                                <div class="clear indent-button"><input name="Submit" class="button png" value="Enviar" type="submit"></div>
                                            </form>
                                        </div>
                                    </div>	 
                                </div>
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
                            <div class="row-banner clear">		
                                <div class="moduletable">
                                    <div class="bannergroup">
                                        <div class="slideshow">
                                            <?php //echo $html->image('shop-ad-books.jpg'); ?>
                                            <?php echo $html->image('adquacao_a_vigilancia_sanitaria.jpg'); ?>
                                            <?php echo $html->image('cursos.jpg'); ?>
                                        </div>
                                    </div>		
                                </div>
                            </div>
                            <div class="row-col-box clear">		
                                <div class="extra-box module s2">
                                    <div class="box-title clear png">
                                        <h3>Serviços</h3>
                                    </div>
                                    <div class="box-indent">
                                        <div class="border-right">
                                            <div class="clear destaques">                                                					
                                                <p class="indent-top-bottom tx">A Saúde Viver é uma empresa formada por nutricionistas que têm como objetivo principal, prestar serviços especializados que atendam as mais variadas necessidades de forma personalizada e com a mais alta qualidade.</p>
                                                <p class="atuacao"><span>Atuação:</span> 
                                                    <a href="#">Hotéis</a>, 
                                                    <a href="#">restaurantes</a>, 
                                                    <a href="#">pizzarias</a>, 
                                                    <a href="#">cafeterias</a>, 
                                                    <a href="#">supermercados</a>, 
                                                    <a href="#">escolas</a>, 
                                                    <a href="#">lanchonetes</a>, 
                                                    <a href="#">padarias</a>, 
                                                    <a href="#">indústrias</a>, 
                                                    <a href="#">motéis</a>, 
                                                    <a href="#">shoppings</a>, 
                                                    <a href="#">eventos</a>, 
                                                    <a href="#">bares</a>,                                                    
                                                    entre outros.
                                                </p>
                                                <div class="row-buttom clear"><a href="<?php echo $this->Html->url(array('action' => 'servicos', 'controller' => '/')); ?>">leia mais...</a></div>                   
                                            </div>
                                        </div>
                                    </div>	 
                                </div>
                                <div class="extra-box module s3">
                                    <div class="box-title clear png">
                                        <h3>Cursos</h3>
                                    </div>
                                    <div class="box-indent">
                                        <div class="border-right">
                                            <div class="clear destaques">                                                					
                                                <p class="indent-top-bottom tx">Confira nossos  cursos para nutricionistas, estudantes e manipuladores de alimentos! Atualização é fundamental!</p>                                                
                                                <ul>
                                                    <li><a href="<?php echo $this->Html->url(array('action' => 'curso-de-consultoria-e-assessoria-de-nutricao-para-servicos-de-alimentacao', 'controller' => 'cursos')); ?>">Consultoria e Assessoria de Nutrição para Serviços de Alimentação</a></li>
                                                    <li><a href="<?php echo $this->Html->url(array('action' => 'curso-de-atualizacao-em-vigilancia-sanitaria--alimentos-', 'controller' => 'cursos')); ?>">Curso de Atualização em Vigilância Sanitária</a></li>
                                                    <li><a href="<?php echo $this->Html->url(array('action' => 'elaboracao-do-manual-de-boas-praticas', 'controller' => 'cursos')); ?>">Manual de Boas Práticas</a></li>
                                                    <li><a href="<?php echo $this->Html->url(array('action' => 'rotulagem-nutricional-de-alimentos', 'controller' => 'cursos')); ?>">Rotulagem Nutricional </a></li>
                                                    <li><a href="<?php echo $this->Html->url(array('action' => 'alimentacao-infantil', 'controller' => 'cursos')); ?>">Alimentação Infantil</a></li>                                                                                          
                                                </ul>   
                                                <div class="row-buttom clear"><a href="<?php echo $this->Html->url(array('action' => 'cursos', 'controller' => '/')); ?>">ver todos...</a></div>                   
                                            </div>
                                        </div>
                                    </div>	 
                                </div>
                            </div>
                            <div class="clear">
                                <table class="blog" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td valign="top">
                                                <table cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="2" class="article_column column_separator midia" valign="top">
                                                                <div class="wrapper-title">
                                                                    <div class="bull-title">
                                                                        <div class="clear contentpaneopen">
                                                                            <div class="fleft">
                                                                                <div class="contentheading"> Saúde Viver na Mídia </div>
                                                                            </div>                 
                                                                        </div>
                                                                    </div>        
                                                                </div>
                                                                <div class="article-indent">
                                                                    <div class="clear">
                                                                        <table class="contentpaneopen">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2" valign="top">                                                                                        
                                                                                        <div class="indent-text">
                                                                                            <ul>
                                                                                                <?php foreach($midias as $midia) { ?>
                                                                                                    <li><a href="<?php echo $this->Html->url(array('action' => $midia['Midia']['url'], 'controller' => 'na-midia')); ?>"><?php echo $html->image($midia['Midia']['logo']); ?> <div><?php echo $midia['Midia']['titulo'] ?></div></a></li>
                                                                                                <?php } ?>                                                                                               
                                                                                            </ul>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>    
                                                                                <tr>
                                                                                    <td colspan="2">&nbsp;</td>
                                                                                </tr>                                                                                
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <a href="<?php echo $this->Html->url(array('controller' => 'na-midia')); ?>" class="readon"> Ver todos...</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>                                                        
                                                        <tr>
                                                            <td class="article_column" valign="top">
                                                                <div class="wrapper-title">
                                                                    <div class="bull-title">
                                                                        <div class="clear contentpaneopen">
                                                                            <div class="fleft">
                                                                                <div class="contentheading"> Artigos </div>
                                                                            </div>                 
                                                                        </div>
                                                                    </div>        
                                                                </div>
                                                                <div class="article-indent">
                                                                    <div class="clear">
                                                                        <table class="contentpaneopen">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2" valign="top">
                                                                                        <div class="img-indent-none clear"><?php echo $html->image('artigos.jpg', array('url' => array('controller' => 'artigos'))); ?></div>
                                                                                        <div class="indent-text">
                                                                                            <ul>
                                                                                                <?php foreach($artigos as $artigo) { ?>
                                                                                                    <li><a href="<?php echo $this->Html->url(array('action' => $artigo['Conteudo']['url'], 'controller' => 'artigos')); ?>"><?php echo $artigo['Conteudo']['title'] ?></a></li>
                                                                                                <?php } ?>                                                                                                
                                                                                            </ul>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>    
                                                                                <tr>
                                                                                    <td colspan="2">&nbsp;</td>
                                                                                </tr>                                                                                
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <a href="<?php echo $this->Html->url(array('controller' => 'artigos')); ?>" class="readon"> Ver todos...</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="article-separator-indent"><span class="article_separator">&nbsp;</span></div>
                                                            </td>                                                            
                                                            <td class="article_column" valign="top">
                                                                <div class="wrapper-title">
                                                                    <div class="bull-title">
                                                                        <div class="clear contentpaneopen">
                                                                            <div class="fleft">
                                                                                <div class="contentheading"> Receitas Industriais </div>
                                                                            </div>                 
                                                                        </div>
                                                                    </div>        
                                                                </div>
                                                                <div class="article-indent">
                                                                    <div class="clear">
                                                                        <table class="contentpaneopen">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td colspan="2" valign="top">
                                                                                        <div class="img-indent-none clear"><?php echo $html->image('receitas.jpg', array('url' => array('controller' => 'receitas'))); ?></div>
                                                                                        <div class="indent-text">
                                                                                            <ul>
                                                                                                <?php foreach($receitas as $receita) { ?>
                                                                                                    <li><a href="<?php echo $this->Html->url(array('action' => $receita['Receita']['url'], 'controller' => 'receitas')); ?>"><?php echo $receita['Receita']['titulo'] ?></a></li>
                                                                                                <?php } ?> 
                                                                                            </ul>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>    
                                                                                <tr>
                                                                                    <td colspan="2">&nbsp;</td>
                                                                                </tr>                                                                                
                                                                                <tr>
                                                                                    <td colspan="2">
                                                                                        <a href="<?php echo $this->Html->url(array('controller' => 'receitas')); ?>" class="readon"> Ver todas...</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="article-separator-indent"><span class="article_separator">&nbsp;</span></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>