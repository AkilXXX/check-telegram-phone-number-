<?php



include 'vendor/autoload.php';
$settings = [
     "app_info" => [
     "api_id" => 6866441,
     "api_hash" => "118436e499d813c4cf463490367f0899"
             ]
  ];
  
$MadelineProto = new \danog\MadelineProto\API('akil.madeline',$settings);  
try{  
system("clear");
echo "By @ffffffm - @AKIL828\n \n";
$n828 = readline('Enter phone number :');
$akil =   $MadelineProto->phone_login($n828);
if($akil["type"]["_"] == "auth.sentCodeTypeSms"){
system("clear");
$MadelineProto->echo("
phone number $n828

██╗░░░██╗███████╗░██████╗
╚██╗░██╔╝██╔════╝██╔════╝
░╚████╔╝░█████╗░░╚█████╗░
░░╚██╔╝░░██╔══╝░░░╚═══██╗
░░░██║░░░███████╗██████╔╝
░░░╚═╝░░░╚══════╝╚═════╝░");
}else{
system("clear");
$MadelineProto->echo("
phone number $n828

███╗░░██╗░█████╗░
████╗░██║██╔══██╗
██╔██╗██║██║░░██║
██║╚████║██║░░██║
██║░╚███║╚█████╔╝
╚═╝░░╚══╝░╚════╝░");
}
}catch(Exception $e){
    echo $e->getMessage().PHP_EOL;
}
//print_r($akil);
