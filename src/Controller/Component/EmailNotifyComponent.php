<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Network\Email\Email;

	class EmailNotifyComponent extends Component {

    public function Register($name, $email, $token) {
        $sendEmail = new Email();
        $sendEmail->transport('gmail');
        $sendEmail->template('register', 'notifications');
        $sendEmail->viewVars(['name' => $name, 'token' => $token]);
        $sendEmail->helpers(['Html','Text']);
        $sendEmail->emailFormat('html');
        $sendEmail->from(['naoresponda@cakephpbrasil.com.br' => 'CakePHP Brasil']);
        $sendEmail->to($email);
        $sendEmail->subject('Cadastro realizado com sucesso');
        return $sendEmail->send();
    }

    public function Activation($name, $email) {
		$sendEmail = new Email();
        $sendEmail->transport('gmail');
        $sendEmail->template('activation', 'notifications');
        $sendEmail->viewVars(['name' => $name]);
        $sendEmail->helpers(['Html','Text']);
        $sendEmail->emailFormat('html');
       	$sendEmail->from(['naoresponda@cakephpbrasil.com.br' => 'CakePHP Brasil']);
		$sendEmail->to($email);
		$sendEmail->subject('Cadastro Ativado com sucesso');
		return $sendEmail->send();
	}
}