<?php

namespace App\Http\Controllers;

use Request;

class EmailController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */

    public function contatoEnviar()
    {
        // echo "<pre>";
        // $post = Request::post();
        // print_r($post);
        // exit();
        // $mail = new PHPMailer();
        // $mail->IsSMTP();		// Ativar SMTP
        // $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        // $mail->SMTPAuth = true;		// Autenticação ativada
        // $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
        // $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
        // $mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
        // $mail->Username = "wellwlds";
        // $mail->Password = "senha123";
        // $mail->SetFrom("wellingtonluiiiz@gmail.com", "Well Luiz");
        // $mail->Subject = "Contato para participar";
        // $mail->Body = "Mensagem";
        // $mail->AddAddress("guialondres@guialondres.com.br");
        // if(!$mail->Send()) {
        //     $error = 'Mail error: '.$mail->ErrorInfo; 
        //     return false;
        // } else {
        //     $error = 'Mensagem enviada!';
        //     return true;
        // }
        return redirect()->route('inicial');

    }
    public function participeEnviar()
    {
        // echo "<pre>";
        // $post = Request::post();
        // print_r($post);
        // exit();
        // $mail = new PHPMailer();
        // $mail->IsSMTP();		// Ativar SMTP
        // $mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        // $mail->SMTPAuth = true;		// Autenticação ativada
        // $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
        // $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
        // $mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
        // $mail->Username = "wellwlds";
        // $mail->Password = "senha123";
        // $mail->SetFrom("wellingtonluiiiz@gmail.com", "Well Luiz");
        // $mail->Subject = "Contato para participar";
        // $mail->Body = "Mensagem";
        // $mail->AddAddress("guialondres@guialondres.com.br");
        // if(!$mail->Send()) {
        //     $error = 'Mail error: '.$mail->ErrorInfo; 
        //     return false;
        // } else {
        //     $error = 'Mensagem enviada!';
        //     return true;
        // }
        return redirect()->route('inicial');
    }

}
