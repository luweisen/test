<?php
/**
* \BaseController
*/
class BaseController{
    protected $view;
    public function __construct(){

    }
    public function __destruct(){
        //调用VIEW
        $view = $this->view;
        if ( $view instanceof View ) {
            extract($view->data);
            require $view->view;
        }
        /*//调用MAIL
        $mail = $this->mail;
        if ( $mail instanceof Mail ) {
            $mailer = new Nette\Mail\SmtpMailer($mail->config);
            $mailer->send($mail);
        }*/
    }
}