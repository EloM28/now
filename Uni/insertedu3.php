<?php
function insertedu()
{
   include("dbconn.php");
   if(isset($_POST['register']))
   {
      if(!empty($_POST))
      {
         if(isset($_POST["nom"],$_POST['prenom'],$_POST['mail'],$_POST['password'])&&!empty($_POST['nom'])&&!empty($_POST['prenom'])&&!empty($_POST['mail'])&&!empty($_POST['password']))
         {
           $nom=strip_tags($_POST['nom']);
           $pren=strip_tags($_POST['prenom']);
           $mail=strip_tags($_POST['mail']);
           $mopass=password_hash($_POST['password'],PASSWORD_ARGON2ID);

            if(!filter_var($mail,FILTER_VALIDATE_EMAIL))
            {
            echo '<script>alert("Le mail est incorrect");</script>';
            }
            $pdostatemnt=$con->query("INSERT INTO authentificate (nom,prenom,email,motdepasse) VALUES ('$nom','$pren','$mail','$mopass')");
            if($pdostatemnt)
            {
               echo '<script>alert("Enregistrement bien fait");</script>';
               header('Location: home3.php');
              // echo "<script>window.location.href='neweduhome.php'</script>";
              /*session_start();
              $_SESSION["pdostatemnt"] =[  "nom" => $user["nom"],
                                           "prenom" => $user["prenom"],
                                           "mail" => $user["email"],
                                         ];
                  
                                       header('Location: ub.php');*/
            }
            else
            {
             echo'<script>alert("L\'enregistrement est mal fait") ;</script>';
            }

           
         }
         else
         {
            echo '<script>alert("Le formulaire est incomplet");</script>';
         }
      }
     
   }
}
?>
