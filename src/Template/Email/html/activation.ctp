<tr><td height="40"></td></tr>
<tr>
    <td>
        <table width="540" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">
            <tr>    
                <td align="center" mc:edit="title1" class="main-header" style="color: #484848; font-size: 18px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                    <multiline>
                        <p>Olá, <b><?php echo $name ?>.</b></p>
                        Seu cadastro na comunidade <b>Cake PHP Brasil</b> está Ativado!
                    </multiline>

                   
                    <p> Faça <b>
                       <?php echo $this->Html->link('Login', [
                            'controller' => 'Users',
                            'action' => 'acesso',
                        ]);?>.
                        </b>
                    </p>
                </td>
            </tr>
            <tr><td height="25"></td></tr>
        </table>
    </td>
</tr>

<tr><td height="40"></td></tr>
                     