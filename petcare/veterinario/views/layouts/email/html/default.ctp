<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
    <head>
        <title>E-mail</title>
    </head>
    <body>
        <div style="margin:30px;font-family:Helvetica, Arial, sans-serif;font-size:14px">
            <div style="border-bottom:1px solid #ccc;margin-bottom:25px;padding-bottom:17px"><img border="0" src="<?php echo $html->url('/img/logo.jpg', true); ?>"></div>
            <?php echo $content_for_layout; ?>
            <div style="color:#999;padding-top:30px;padding-bottom:20px"> 
                <strong>Equipe do Sistema</strong>
                <font color="#888888">
                    <br>
                    <a target="_blank" style="color:#F60" href="mailto:jorge.testes@gmail.com">jorge.testes@gmail.com</a> 
                </font>
            </div>
        </div>
    </body>
</html>