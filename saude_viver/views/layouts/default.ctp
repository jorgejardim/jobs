<!--?xml version="1.0" encoding="utf-8"?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" dir="ltr" lang="en-gb">
    <head>
        <title><?php echo $title_for_layout?$title_for_layout.' - ':''; ?>Consultoria e Assessoria em Nutrição Saúde Viver</title>        
        <meta content="<?php echo $title_for_layout?$title_for_layout:'Consultoria e Assessoria em Nutrição Saúde Viver'; ?>" name="title" />
        <meta content="<?php echo $conteudo['text']?substr(strip_tags($conteudo['text']),0,400):'Consultoria para estabelecimentos alimentícios de qualidade, higiene, manipulação de alimentos, boas práticas, legislação sanitária, fichas técnicas, treinamentos e cursos na área.'; ?>" name="description" />
        <meta content="alimentação,alimentação esporte,alimentação saudavel,alimentação saudável,alimento,alimento é,alimentício,artigo,artigo cientifico,artigos,artigos cientificos,artigos científicos,treinamento,cursos,aulas,artigos empresas,artigos esportivos,artigos infantil,artigos trabalho,assessoria,bacalhau,boas praticas manipulação,bolos,bolos decorados,camarão,consultora,consultores,consultoria,consultoria empresas,consultoria o que é,culinaria,culinária,diet,diets,doces,empresa assessoria,empresa consultoria,empresas assessoria,empresas trei...essoria,aceçoria,manipulasão,light,restaurante,bar,supermercado,escola,lanchonete,comida,cozinha,industrial,cozinha industrial,alimentação coletiva,refeição transportada,marmitex,treinamento funcionario,pop,procedimento operacional padronizado,padroniza,padronização,nutricional,caloria,dieta,higclean,procedimento,organizar,organização,restaurantes,bares,cantinas,produtos limpeza,limpeza,produto,produtos,rotular,salgados,doces,molhos,sobremesas,diabete,diabetes,hipertenção,hipertensao,ipertensao,ipertenção" name="keywords" />
        <meta name="verify-v1" content="dRKOqDB4qcMADEfWIAyIxpwtrjV1U5wrbMsf7gSgd3Q=" />
        <meta name="verify-v1" content="DaYnpz+50gZHU1TeZC2/wxmUpnH4XzVRyyVzoVlVsoo=" />
        <meta name="robots" content="index, follow" />
        <meta lang="pt-br" content="Jorge Jardim" name="author" />
        <?php echo $html->charset()."\n"; ?>
        <?php 
            echo $javascript->link(array('jquery', 'comum', 'jquery.maskedinput.min', 'jquery.price_format.1.7.min' ,
                                         'jquery.validate', 'jquery.date', 'date.format',
                                         'ui/jquery-ui-1.8.16.custom.min', 'jquery.cycle.all.latest',
                                         'jqueryUI/development-bundle/ui/jquery.ui.core', 
                                         'jqueryUI/development-bundle/ui/jquery.ui.dialog', 
                                         'jqueryUI/development-bundle/ui/jquery.ui.position',
                                         'jqueryUI/development-bundle/ui/jquery.ui.widget',
                                         'ckeditor/ckeditor', 'ckeditor/adapters/jquery'
                 )); 
            echo $html->css('template')."\n";
            echo $html->css('constant')."\n";
            echo $html->css('jquery-ui-1.8.18.custom')."\n";
            if(isset($this->params["admin"])) {
                echo $html->css('admin')."\n";                
            }            
        ?>  
        <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
        <!--[if lt IE 7]>
           <?php echo $javascript->link(array('ie_png')); ?>
           <script type="text/javascript">
               ie_png.fix('.png');
           </script>
        <![endif]-->
        <script>
            $(document).ready(function() {
                $('.slideshow').cycle({
                    fx: 'fade'
                });
            });
        </script>        
    </head>
    <body id="body">
        <!--header-->
        <div class="tail-top-menu clear">
            <div class="main">
                <div class="row-top-menu clear">
                    <div class="wrapper-left clear">
                        <div class="wrapper-right">
                            <div class="wrapper-left-top">
                                <div class="wrapper-right-top clear">
                                    <div class="module">				   
                                        <nav>
                                            <ul class="menu-nav">
                                                <li class="item53"><a href="<?php echo $this->Html->url(array('controller' => '/')); ?>"><span>Home</span></a></li>
                                                <li class="item54"><a href="<?php echo $this->Html->url(array('action' => 'servicos', 'controller' => '/')); ?>"><span>Serviços</span></a></li>
                                                <li class="item55"><a href="<?php echo $this->Html->url(array('action' => 'cursos', 'controller' => '/')); ?>"><span>Cursos</span></a></li>
                                                <li class="item56"><a href="<?php echo $this->Html->url(array('action' => 'artigos', 'controller' => '/')); ?>"><span>Artigos</span></a></li>
                                                <li class="item57"><a href="<?php echo $this->Html->url(array('action' => 'na-midia', 'controller' => '/')); ?>"><span>Na Mídia</span></a></li>
                                                <li class="item58"><a href="<?php echo $this->Html->url(array('action' => 'blog', 'controller' => '/')); ?>"><span>Blog</span></a></li>
                                                <li class="item59"><a href="<?php echo $this->Html->url(array('action' => 'quem-somos', 'controller' => '/')); ?>"><span>Quem Somos</span></a></li>
                                                <li class="item60"><a href="<?php echo $this->Html->url(array('action' => 'contato', 'controller' => '/')); ?>"><span>Contato</span></a></li>
                                                <li class="item61"><a href="<?php echo $this->Html->url(array('action' => 'login', 'controller' => 'users', 'admin' => true)); ?>"><span>Login</span></a></li>                                            
                                            </ul>	
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tail-header clear">
            <div class="main">
                <div class="wrapper-left clear">
                    <div class="wrapper-right clear">
                        <div class="wrapper-left-top">
                            <div class="wrapper-right-top clear">
                                <div class="header">
                                    <div class="clear">
                                        <div class="fright">		
                                            <div class="clear wrapper-top module s1">
                                                <div class="box-title png">
                                                    <h3>Olá!</h3>
                                                </div> 
                                                Seja bem-vindo!
                                            </div>
                                        </div>
                                        <div class="fleft">
                                            <?php if($this->params["action"]=='home') { ?>
                                                <h1><a href="<?php echo $this->Html->url(array('controller' => '/')); ?>">Consultoria, Assessoria e Treinamento em Nutrição e Qualidade</a></h1>
                                            <?php } else { ?>
                                                <h4><a href="<?php echo $this->Html->url(array('controller' => '/')); ?>">Consultoria, Assessoria e Treinamento em Nutrição e Qualidade</a></h4>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <?php 
            if($this->params['action']!='home') {
                echo $this->element('pages_header');
                echo $content_for_layout;
                echo $this->element('pages_footer');
            } else {
                echo $content_for_layout;
            }
        ?>        
        <div class="tail-footer clear">
            <div class="main">
                <div class="footer clear">
                    <ul class="menu-nav">
                        <li class="item53"><a href="<?php echo $this->Html->url(array('controller' => '/')); ?>"><span>Home</span></a></li>
                        <li class="item54"><a href="<?php echo $this->Html->url(array('action' => 'servicos', 'controller' => '/')); ?>"><span>Serviços</span></a></li>
                        <li class="item55"><a href="<?php echo $this->Html->url(array('action' => 'cursos', 'controller' => '/')); ?>"><span>Cursos</span></a></li>
                        <li class="item56"><a href="<?php echo $this->Html->url(array('action' => 'artigos', 'controller' => '/')); ?>"><span>Artigos</span></a></li>
                        <li class="item57"><a href="<?php echo $this->Html->url(array('action' => 'noticias', 'controller' => '/')); ?>"><span>Notícias</span></a></li>
                        <li class="item58"><a href="<?php echo $this->Html->url(array('action' => 'blog', 'controller' => '/')); ?>"><span>Blog</span></a></li>
                        <li class="item59"><a href="<?php echo $this->Html->url(array('action' => 'quem-somos', 'controller' => '/')); ?>"><span>Quem Somos</span></a></li>
                        <li class="item60"><a href="<?php echo $this->Html->url(array('action' => 'contato', 'controller' => '/')); ?>"><span>Contato</span></a></li>
                        <li class="item61"><a href="<?php echo $this->Html->url(array('action' => 'login', 'controller' => 'users', 'admin' => true)); ?>"><span>Login</span></a></li>                                            
                    </ul> 
                    <ul class="menu-nav termos clear">
                        <li class="item59"><a href="<?php echo $this->Html->url(array('action' => 'termo-de-uso-e-servicos', 'controller' => '/')); ?>"><span>Termo de Uso & Serviços</span></a></li>
                        <li class="item59"><a href="<?php echo $this->Html->url(array('action' => 'termo-de-responsabilidade', 'controller' => '/')); ?>"><span>Termo de Responsabilidade</span></a></li>
                        <li class="item59"><a href="<?php echo $this->Html->url(array('action' => 'politica-de-privacidade', 'controller' => '/')); ?>"><span>Política de Privacidade</span></a></li>                                          
                    </ul>
                    <br class="clear" />
                    <p>Copyright © 2006 - <?php echo date('Y'); ?>. Saúde Viver - Consultoria e Assessoria em Nutrição.</p>
                </div>
            </div>
        </div>
        <div style="display:none"> <?php echo $html->image('logo_facebook.png'); ?> </div>
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $session->flash(); ?>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
            var pageTracker = _gat._getTracker("UA-327157-2");
            pageTracker._trackPageview();   
        </script>
        <?php if($session->read('conversao_contato')) { ?>
            <?php $session->delete('conversao_contato'); ?>
            <!-- Codigo de Conversao - Enviou Contato -->
            <script type="text/javascript">
                /* <![CDATA[ */
                var google_conversion_id = 1024072896;
                var google_conversion_language = "pt";
                var google_conversion_format = "3";
                var google_conversion_color = "ffffff";
                var google_conversion_label = "OQSPCOC-oAIQwLmo6AM";
                var google_conversion_value = 1;
                /* ]]> */
            </script>
            <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
            <noscript>
                <div style="display:inline;">
                    <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1024072896/?value=1&amp;label=OQSPCOC-oAIQwLmo6AM&amp;guid=ON&amp;script=0"/>
                </div>
            </noscript>        
        <?php } ?>
    </body>
</html>
<?php echo $this->element('sql_dump'); ?>