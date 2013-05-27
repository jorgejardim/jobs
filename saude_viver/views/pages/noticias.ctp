<div class="componentheading"><h2>Notícias</h2></div>
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
                                                <div class="contentheading"> <h1><?php echo @$conteudo['title']?$conteudo['title']:'Todos as Notícias'; ?></h1>&nbsp; </div>
                                            </div>                 
                                        </div>
                                    </div>        
                                </div>
                                <div class="content">
                                    <div class="clear">
                                        <table class="contentpaneopen">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" colspan="2" class="artigos">
                                                        <?php if(isset($conteudo['text'])) { ?>
                                                            <div class="midias-sociais">
                                                                <div class="addthis_toolbox addthis_default_style ">
                                                                    <a class="addthis_button_preferred_1"></a>
                                                                    <a class="addthis_button_preferred_2"></a>
                                                                    <a class="addthis_button_preferred_3"></a>
                                                                    <a class="addthis_button_preferred_4"></a>
                                                                    <a class="addthis_button_compact"></a>
                                                                    <a class="addthis_counter addthis_bubble_style"></a>
                                                                </div>  
                                                                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fc154c77e68c686"></script>
                                                            </div>                                                                
                                                        <?php
                                                                echo @$conteudo['text'];
                                                                echo '<br />';
                                                                echo @$conteudo['fonte']?'<strong>Fonte:</strong> '.@$conteudo['fonte']:'';
                                                                echo @$conteudo['link']?' ('.$html->link('link original', @$conteudo['link']).')':'';
                                                                echo '<br /><br /><br />';
                                                            } else {
                                                                foreach($artigos as $artigo) {
                                                                    echo $html->link($artigo['Conteudo']['title'], '/noticias/'.$artigo['Conteudo']['url'], array('class' => 'list'));
                                                                }
                                                            }            
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php if(isset($relacionados)) { ?>
                                                    <tr>
                                                        <td colspan="2">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="relacionados" colspan="2"> Outras notícias: </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="relacionados-links" colspan="2">
                                                            <?php foreach($relacionados as $relacionado) { 
                                                                echo $html->link($relacionado['Conteudo']['title'], '/noticias/'.$relacionado['Conteudo']['url'], array('class' => 'list'));
                                                            } ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>                                                
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                </tr>         
                                                <tr>
                                                    <td colspan="2">&nbsp;</td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr>                                                        
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>                                                                                                                               