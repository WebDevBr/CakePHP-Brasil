<tr><td height="40"></td></tr>
<tr>
    <td>
        <table width="540" border="0" align="center" cellpadding="0" cellspacing="0" class="mainContent">
            <tr>    
                <td align="center" mc:edit="title1" class="main-header" style="color: #484848; font-size: 18px; font-weight: normal; font-family: Helvetica, Arial, sans-serif;">
                    <multiline>
                        <p>Olá, <b><?php echo $name ?>.</b></p>
                        Bem vindo a comunidade Cake <b>PHP Brasil!</b>
                    </multiline>
                    <p>O seu cadastro está quase completo! Basta confirmar seu e-mail no link abaixo</p>
                    <b>
                       <?php echo $this->Html->link('Clique Aqui', [
    'controller' => 'Users',
    'action' => 'activation',
    'full_base'=>true,
    null,
    '?' => ['token' => $token]
]);?>
                    </b>
                </td>
            </tr>
            <tr><td height="25"></td></tr>
        </table>
    </td>
</tr>

<tr><td height="40"></td></tr>
                     