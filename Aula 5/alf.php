<?php
if(empty($_POST))
throw new InvalidArgumentException("Requisição inválida!!!");

$email = $_POST['user_email'];
$password = $_POST['user_password'];

$_SESSION_start['user_email'];
accessVerify(email: $email, password: $password);

function accessverify(string $password, string $email):void

{
$ab = [
    [
        'name' => 'João Paulo',
        'email' =>'joaopaulo@gmail.com.br',
        'password' => '$2y$10$00HdfUeo7L48RHymSIFVyOn7Byf1Ypodub.b9RQr5amtbcsJCLZlq',
        'gender' => 'M'
    ],
    ['name' => 'Maria Aparecida',
    'email' => 'maria.paulo@gmail.com',
    'password' => '$2y$10$00HdfUeo7L48RHymSIFVyOn7Byf1Ypodub.b9RQr5amtbcsJCLZlq',
    'gender' => 'F'
    ]

];

foreach($ab as $register){
    if($email == $register['email'] && password_verify($password, $register
    ['password']))
    {

        $_SESSION['USER_NAME'] = $register['name'];
        $_SESSION['user_gener'] = $register['gener'];
        header('location:dashoard.php'); //redirect
    
}

}
$_SESSION['msq_login_error'] = 'Lamento, usuário ou senha inválidos!!!';
header('location:index.php');

}

