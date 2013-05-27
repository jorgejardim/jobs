<div class="componentheading"><h2>Serviços</h2></div>
<table class="servicos" cellpadding="0" cellspacing="0" width="100%">
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
                                                <div class="contentheading"> <h1><?php echo @$conteudo['title']; ?></h1>&nbsp; </div>
                                            </div>                 
                                        </div>
                                    </div>        
                                </div>
                                <div class="content">
                                    <div class="clear">
                                        <table class="contentpaneopen">
                                            <tbody>
                                                <tr>
                                                    <td valign="top" colspan="2">
                                                        <?php echo @$conteudo['text']; ?>
                                                    </td>
                                                </tr>
                                                <?php if(isset($relacionados)) { ?>
                                                    <tr>
                                                        <td colspan="2">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="relacionados" colspan="2"> Outros serviços que você possa estar interessado: </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="relacionados-links" colspan="2">
                                                            <?php foreach($relacionados as $relacionado) { 
                                                                echo $html->link($relacionado['Conteudo']['title'], '/servicos/'.$relacionado['Conteudo']['url'], array('class' => 'list'));
                                                            } ?>
                                                        </td>
                                                    </tr> 
                                                <?php } ?>
                                                <tr>
                                                    <td class="informacoes" colspan="2">
                                                        <div>Quer mais informações sobre nossos serviços?</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="mensagem" colspan="2">
                                                        Entre em contato conosco pelo telefone <strong>(11) 4063-2171</strong> ou utilize o <strong>formulário abaixo</strong> e envie uma mensagem.<br />
                                                        Será uma satisfação ouvi-lo(a) e ajudá-lo(a) a identificar a melhor opção em serviços para o seu estabelecimento.
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="formulario" colspan="2">
                                                        <form action="<?php echo $this->Html->url(array('controller' => 'contato')); ?>" class="form-validate" id="emailForm" name="emailForm" method="post">
                                                            <input type="hidden" name="data[Contato][refer]" value="<?php echo $this->Html->url(); ?>">
                                                            <div class="contact_email">
                                                                <label for="contact_name">&nbsp;<strong>Digite seu Nome:</strong></label>
                                                                <br>
                                                                <input type="text" value="" class="inputbox" size="30" id="contact_name" name="data[Contato][nome]">
                                                                <br>
                                                                <label for="contact_email" id="contact_emailmsg">&nbsp;<strong>Digite seu E-mail:</strong></label>
                                                                <br>
                                                                <input type="text" maxlength="100" class="inputbox required validate-email" value="" size="30" name="data[Contato][email]" id="contact_email">
                                                                <br>
                                                                <label for="contact_email" id="contact_emailmsg">&nbsp;<strong>Digite seu Telefone:</strong></label>
                                                                <br>
                                                                <input type="text" maxlength="100" class="inputbox required telefone" value="" size="30" name="data[Contato][telefone]" id="contact_email">
                                                                <br>
                                                                <label for="contact_email" id="contact_emailmsg">&nbsp;Digite seu Celular:</label>
                                                                <br>
                                                                <input type="text" maxlength="100" class="inputbox required telefone" value="" size="30" name="data[Contato][celular]" id="contact_email">
                                                                <br>
                                                                <label for="contact_subject">&nbsp;<strong>Assunto da Mensagem:</strong></label>
                                                                <br>
                                                                <input type="text" value="" class="inputbox" size="30" id="contact_subject" name="data[Contato][assunto]">
                                                                <br><br>
                                                                <label for="contact_text" id="contact_textmsg"> &nbsp;<strong>Digite sua Mensagem:</strong> </label>
                                                                <br>
                                                                <textarea class="inputbox required" id="contact_text" name="data[Contato][mensagem]" rows="10" cols="50"></textarea>
                                                                <br>
                                                                <br>
                                                                <button type="submit" class="button validate">Enviar Mensagem</button>
                                                            </div>	
                                                        </form>
                                                    </td>
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