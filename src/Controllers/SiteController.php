<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "./src/Models/UserModel.php";

function index()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Anasayfa";


    if (isset($_POST["signup"])) {

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $job =  $_POST["job"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (userSignupModel($firstname, $lastname, $job, $address, $email, $password)) {
            $data["message"] = "Kayıt başarılı.";
            view("message", $data);
        }
    } else if (isset($_POST["signin"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];

        if (userSigninModel($email, $password) != []) {
            $data["message"] = "Giriş başarılı.";


            $user = userSigninModel($email, $password);

            $_SESSION["login"] = true;
            $_SESSION["role"] = $user[0]["role"];

            if ($_SESSION["role"] == "admin") {
                header("Location: /?admin");
            }

            header("Refresh:3; /");
            view("message", $data);
        } else {
            $data["message"] = "Bilgilerinizi kontrol ediniz.";
            view("message", $data);
        }
    }


    view("index", $data);
}




function hakkimizda()
{

    $data["title"] = "G&F SÜRÜCÜ KURSU | Hakkımızda";

    view("hakkimizda", $data);
}

function dersler()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Dersler";

    view("dersler", $data);
}

function egitmenler()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Eğitmenler";
    $data["egitmenler"] = getEducatorModel();

    view("egitmenler", $data);
}

function sinav()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Sınav";
    $data["message"] = "Sınavları görebilemek için kayıt olmalısınız.";

    if (isset($_SESSION["login"])) {
        view("sinav", $data);
    } else view("message", $data);
}

function belge()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Belge";

    view("belge", $data);
}

function iletisim()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | İletişim";


    if (isset($_POST["contact"])) {

        $adi_soyadi = $_POST['adi_soyadi'];
        $email = $_POST['email'];
        $mesaj = $_POST['mesaj'];
        

        $mail_içerik = "Merhaba yönetici sitenizden yeni bir iletişim mesajı gönderildi.Bilgiler aşağıdadır.<br>";
        $mail_içerik .= "Adı-Soyadı: $adi_soyadi<br>";
        $mail_içerik .= "Email: $email<br>";
        $mail_içerik .= "Mesaj: $mesaj<br>";
        $konu = "Sitenizden  mesaj var.";
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug ;                    //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'kahvecigizem45@gmail.com';                     //SMTP username
            $mail->Password   = 'kvcbvigbhsnjefqs';                               //SMTP password
            $mail->SMTPSecure = 'tls';           //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('gizemnurkhvc@gmail.com', 'Gizem Nur KAHVECI');
            $mail->addAddress('kahvecigizem45@gmail.com', 'Gizem KAHVECİ');     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $konu;
            $mail->Body    = $mail_içerik;
            $mail->AltBody = $mail_içerik;

           
            if ($mail->send()) {

                $data["message"] = "Mesaj Gönderildi.";
               
                view("message", $data); 
                exit();
            }
            

        } catch (Exception $e) {
            echo "Mesaj Gönderilmedi: {$mail->ErrorInfo}";
        }
    }


    view("iletisim", $data);
}

function logout()
{
    session_destroy();
    header("Location: /");
}

function message()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Hata";
    $data["message"] = "Aradığınız sayfa bulunamadı.";

    view("message", $data);
}

function admin()
{
    $data["title"] = "G&F SÜRÜCÜ KURSU | Admin";
    $data["users"] = getUsersModel();


    if (isset($_SESSION["login"]) && $_SESSION["role"] == "admin") {



        view("admin", $data);
    } else {

        $data["message"] = "Yetkiliyseniz admin girişi yapınız.";
        view("message", $data);
    }
}
