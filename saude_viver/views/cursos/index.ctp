<?php if(isset($curso['titulo'])) { ?>
    <div class="componentheading"><h2>Cursos</h2></div>
<?php } else { ?>
    <div class="componentheading"><h1>Cursos</h1></div>
<?php } ?>
<table class="blog" cellpadding="0" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <td valign="top">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td colspan="2" class="article_column column_separator midia cursos" valign="top">
                                <?php if(isset($this->params['aguarde'])) { ?>
                                    <div class="wrapper-title">
                                        <div class="bull-title">
                                            <div class="clear contentpaneopen">
                                                <div class="fleft">
                                                    <div class="contentheading"> Aguarde...&nbsp; </div>
                                                </div>                 
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="content">
                                        <div class="clear">
                                            <table class="contentpaneopen">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="saiba-mais">
                                                            Você será direcionado ao <strong>Sistema de Pagamento</strong> em<br /><br />
                                                            <font size="18" color="#f00"><span id="counter"></span> segundos.</font><br /><br />
                                                            <a href="<?php echo $session->read('redirect_pagamento'); ?>">Clique aqui se a pagina não redirecionar automaticamente.</a>
                                                            <script type="text/javascript">
                                                                var cntr = 5;         
                                                                function tick() {             
                                                                    document.getElementById("counter").innerHTML = cntr--;             
                                                                    if (cntr > 0) {                 
                                                                        setTimeout(tick, 1000);             
                                                                    } else {                 
                                                                        document.location.href='<?php echo $session->read('redirect_pagamento'); ?>';            
                                                                    }         
                                                                }
                                                                $(document).ready(function() {
                                                                    tick();     
                                                                });
                                                            </script> 
                                                            <!-- Codigo de Conversao - Comprou Curso -->
                                                            <script type="text/javascript">
                                                                /* <![CDATA[ */
                                                                var google_conversion_id = 1024072896;
                                                                var google_conversion_language = "en";
                                                                var google_conversion_format = "2";
                                                                var google_conversion_color = "ffffff";
                                                                var google_conversion_label = "QqPWCJDSsgEQwLmo6AM";
                                                                var google_conversion_value = 1;
                                                                /* ]]> */
                                                            </script>
                                                            <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
                                                            <noscript>
                                                                <div style="display:inline;">
                                                                    <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1024072896/?value=1&amp;label=QqPWCJDSsgEQwLmo6AM&amp;guid=ON&amp;script=0"/>
                                                                </div>
                                                            </noscript>                                                            
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> 
                                <?php } elseif(isset($this->params['inscricao'])) { ?>
                                    <div class="wrapper-title">
                                        <div class="bull-title">
                                            <div class="clear contentpaneopen">
                                                <div class="fleft">
                                                    <div class="contentheading"> <?php if($curso['material_de_apoio']) { ?>Adquira seu Material<?php } else { ?>Faça sua Inscrição<?php } ?>&nbsp; </div>
                                                </div>                 
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="content">
                                        <div class="clear">
                                            <table class="contentpaneopen">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="info">
                                                            <form name="form" class="inscricao" method="post">

                                                                <input type="hidden" value="jmenegazzi" name="recebedor[login]">
                                                                <input type="hidden" value="<?php echo $curso['titulo']; ?>" name="razao">
                                                                <input type="hidden" value="<?php echo $curso['id']; ?>" name="curso_id">
                                                                <input type="hidden" value="<?php echo $curso['valor_normal']; ?>" name="valor">

                                                                <table width="95%" cellspacing="0" cellpadding="2" border="0" align="center">
                                                                    <tr>
                                                                        <td nowrap="nowrap" align="right">
                                                                            <?php if($curso['material_de_apoio']) { ?>
                                                                                Produto:
                                                                            <?php } else { ?>
                                                                                Curso:
                                                                            <?php } ?>                                                                        
                                                                        </td>
                                                                        <td><?php echo $curso['titulo']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="nowrap" align="right">Valor:</td>
                                                                        <td>R$ <?php echo $curso['valor_normal']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2" class="titulo-laranja titulo-form">Preencha o formulário abaixo com seus dados:</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="nowrap" align="right">Nome:</td>
                                                                        <td><input name="pagador[nome]" class="nome" type="text" size="35"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="nowrap" align="right">E-mail:</td>
                                                                        <td><input name="pagador[email]" class="email" type="text" size="40"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="nowrap" align="right">Telefone:</td>
                                                                        <td>
                                                                            <input class="telefone" type="text" maxlength="16" size="10" name="pagador[endereco][telefone]" id="telefone">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td nowrap="nowrap" align="right">Profissão:</td>
                                                                        <td>
                                                                            <select class="profissao" name="profissao">
                                                                                <option value="Estudante">Estudante</option>
                                                                                <option value="Nutricionista">Nutricionista</option>
                                                                                <option value="Técnico de Nutrição">Técnico de Nutrição</option>
                                                                                <option value="Outros">Outros</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td nowrap="nowrap" align="right">Como soube do curso:</td>
                                                                        <td>
                                                                            <select class="como-soube" name="como_soube">
                                                                                <option></option>
                                                                                <option value="Google">Google</option>
                                                                                <option value="E-mail">E-mail</option>
                                                                                <option value="Indicação">Indicação</option>
                                                                                <option value="Facebook">Facebook</option>
                                                                                <option value="Outros">Outros</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td colspan="2">&nbsp;</td>
                                                                    </tr>                                                                    
                                                                    <tr>
                                                                        <td align="right">CEP:</td>
                                                                        <td>
                                                                            <input class="cep" type="text" size="15" name="pagador[endereco][cep]" maxlength="8">
                                                                            <img border="0" align="absmiddle" src="http://www.dietados3copos.com.br/images/loading.gif" style="display:none" id="carregando"> <a target="_blank" style="color:#000000; font-size:10px" href="http://www.correios.com.br/servicos/cep/cep_loc_log.cfm">Não se lembra do CEP? Clique aqui</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="right">Endereço:</td>
                                                                        <td><input class="endereco" type="text" size="45" name="pagador[endereco][logradouro]"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="right">Número:</td>
                                                                        <td><input class="numero" type="text" size="5" name="pagador[endereco][numero]"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="right">Complemento:</td>
                                                                        <td><input class="complemento" type="text" size="5" name="pagador[endereco][complemento]"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="right">Bairro:</td>
                                                                        <td><input class="bairro" type="text" size="15" name="pagador[endereco][bairro]"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="right">Cidade:</td>
                                                                        <td><input class="cidade" type="text" size="15" name="pagador[endereco][cidade]"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="right">Estado:</td>
                                                                        <td><input class="estado" type="text" size="3" name="pagador[endereco][estado]" maxlength="2"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="center" colspan="2">
                                                                            <input type="submit" value="Clique aqui para Comprar" name="enviar">
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </form> 
                                                            <div class="formas-pagamento">
                                                                <?php echo $html->image('banner_moip.jpg'); ?>                                                                
                                                            </div>                                                             
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>                                
                                <?php } elseif(isset($curso['titulo'])) { ?>
                                    <div class="wrapper-title">
                                        <div class="bull-title">
                                            <div class="clear contentpaneopen">
                                                <div class="fleft">
                                                    <div class="contentheading"> <h1><?php echo $curso['titulo'] ?></h1>&nbsp; </div>
                                                </div>                 
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="content">
                                        <div class="clear">
                                            <table class="contentpaneopen">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="info">
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
                                                            <?php if($curso['material_de_apoio']) { ?>
                                                                <div class="i">
                                                                    <div class="limitadas">Disponibilizamos nossos<br />materiais de apoio para download.</div>
                                                                    <div class="inscrevase-right">
                                                                        <?php echo $html->image('botao_inscreva-se.png', array('class' => $botao, 'url' => '/cursos/inscricao/'.$curso['id'])); ?>                                                                
                                                                    </div>                                                                
                                                                </div>                                                              
                                                            <?php } elseif($curso['curso_online']) { ?>
                                                                <div class="i">
                                                                    <div class="limitadas">Curso Online.<br />Matricule-se e comece a estudar hoje mesmo.</div>
                                                                    <div class="inscrevase-right">
                                                                        <?php echo $html->image('botao_inscreva-se.png', array('class' => $botao, 'url' => '/cursos/inscricao/'.$curso['id'])); ?>                                                                
                                                                    </div>                                                                
                                                                </div>                                                            
                                                            <?php } else { ?>
                                                                <div class="t">Data:</div> 
                                                                <div class="i">
                                                                    <strong><?php echo $this->Formatacao->dataCurso($curso['data'], $curso['data_final']); ?></strong>
                                                                    <div class="limitadas">Vagas Limitadas</div>
                                                                    <div class="inscrevase-right">
                                                                        <?php echo $html->image('botao_inscreva-se.png', array('class' => $botao, 'url' => '/cursos/inscricao/'.$curso['id'])); ?>                                                                
                                                                    </div>                                                                
                                                                </div>
                                                            <?php } ?>
                                                            <?php if($curso['material_de_apoio']) { ?>
                                                            <div class="t">Informações:</div> 
                                                            <div class="i"><?php echo nl2br($curso['obs']); ?> </div>
                                                            <?php } ?>                                                                
                                                            <?php if((trim($curso['publico']))) { ?>
                                                            <div class="t">Público-alvo:</div> 
                                                            <div class="i"><?php echo nl2br($curso['publico']); ?> </div>
                                                            <?php } if((trim($curso['conteudo']))) { ?>
                                                            <div class="t">Conteúdo<?php if(!$curso['material_de_apoio']) { ?> Programático<?php } ?>:</div> 
                                                            <div class="i"><?php echo nl2br($curso['conteudo']); ?> </div>
                                                            <?php } if((trim($curso['palestrantes']))) { ?>
                                                            <div class="t">Palestrantes:</div> 
                                                            <div class="i"><?php echo nl2br($curso['palestrantes']); ?> </div>
                                                            <?php } if((trim($curso['valor_normal']))) { ?>
                                                            <div class="t">Investimento:</div> 
                                                            <div class="i">Nutricionistas, técnicos e demais interessados: R$ <?php echo $curso['valor_normal']; ?> </div>
                                                            <?php } if((trim($curso['incluso']))) { ?>
                                                            <div class="t">Incluso:</div> 
                                                            <div class="i"><?php echo nl2br($curso['incluso']); ?> </div> 
                                                            <?php } if((trim($curso['local']))) { ?>
                                                            <div class="t">Local:</div> 
                                                            <div class="i"><?php echo nl2br($curso['local']); ?> </div> 
                                                            <?php } ?>
                                                            <?php if(!$curso['material_de_apoio']) { ?>
                                                            <div class="inscrevase-center">
                                                                <?php echo $html->image('botao_inscreva-se.png', array('class' => $botao, 'url' => '/cursos/inscricao/'.$curso['id'])); ?>                                                                
                                                            </div>
                                                            <?php } if((trim($curso['contato']))) { ?>
                                                            <div class="t">Fale conosco:</div> 
                                                            <div class="i"><?php echo nl2br($curso['contato']); ?> </div>
                                                            <?php } if((trim($curso['obs'])) && !$curso['material_de_apoio']) { ?>
                                                            <div class="t">Observações Gerais:</div> 
                                                            <div class="i"><?php echo nl2br($curso['obs']); ?> </div>
                                                            <?php } if((trim($curso['cancelamento']))) { ?>
                                                            <div class="t">Cancelamento:</div> 
                                                            <div class="i"><?php echo nl2br($curso['cancelamento']); ?> </div> 
                                                            <?php } ?>
                                                            <div class="inscrevase-center">
                                                                <?php echo $html->image('botao_inscreva-se.png', array('class' => $botao, 'url' => '/cursos/inscricao/'.$curso['id'])); ?>                                                                
                                                            </div>                                                            
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                <?php foreach($cursos as $curso) { ?>
                                    <div class="wrapper-title">
                                        <div class="bull-title">
                                            <div class="clear contentpaneopen">
                                                <div class="fleft">
                                                    <div class="contentheading"> <h2><?php echo $curso['Curso']['titulo'] ?></h2>&nbsp; </div>
                                                </div>                 
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="content">
                                        <div class="clear">
                                            <table class="contentpaneopen">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="data">
                                                            <strong>Data:</strong> <?php echo $this->Formatacao->dataCurso($curso['Curso']['data'], $curso['Curso']['data_final']); ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="saiba-mais">
                                                            <?php echo $html->link('Saiba Mais', '/cursos/'.$curso['Curso']['url'], array('class' => 'list'));?>
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <?php } foreach($cursos_online as $curso) { ?>
                                    <div class="wrapper-title">
                                        <div class="bull-title">
                                            <div class="clear contentpaneopen">
                                                <div class="fleft">
                                                    <div class="contentheading"> <?php echo $curso['Curso']['titulo'] ?>&nbsp; </div>
                                                </div>                 
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="content">
                                        <div class="clear">
                                            <table class="contentpaneopen">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="saiba-mais">
                                                            <?php echo $html->link('Saiba Mais', '/cursos/'.$curso['Curso']['url'], array('class' => 'list'));?>
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                <?php } foreach($material_de_apoio as $curso) { ?>
                                    <div class="wrapper-title">
                                        <div class="bull-title">
                                            <div class="clear contentpaneopen">
                                                <div class="fleft">
                                                    <div class="contentheading"> <?php echo $curso['Curso']['titulo'] ?>&nbsp; </div>
                                                </div>                 
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="content">
                                        <div class="clear">
                                            <table class="contentpaneopen">
                                                <tbody>
                                                    <tr>
                                                        <td valign="top" colspan="2" class="saiba-mais">
                                                            <?php echo $html->link('Adquira seu Material de Apoio', '/cursos/'.$curso['Curso']['url'], array('class' => 'list'));?>
                                                        </td>
                                                    </tr>                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>                                
                                <?php }} ?>
                            </td>
                        </tr>                                                        
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>                                                                                                                               