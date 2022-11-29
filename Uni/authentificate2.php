<?php
function authenti()
{
    /*if(isset($_POST['log'])){
        $mail=$_POST['mail'];
        $passmo=$_POST['password'];
        $query=$con->prepare("SELECT * FROM authentificate WHERE email='$mail' AND motdepasse='$passmo' ");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $exec=$query->execute();
        $user=$exec->fetch();
        if($user==true && $passmo==$user['motdepasse'])
        {
           /* echo '<script>alert("Enregistrement bien fait");</script>';
            echo "<script>window.location.href='neweducontacts.php'</script>";
            header('Location: neweducontacts.php');
        }
        else
        {
            echo'<script>alert("L\'enregistrement est mal fait") ;</script>';
        }
    }*/
    if(isset($_POST['log']))
    {
        
            if(isset($_POST['mail'],$_POST['password'])&&!empty($_POST['mail'])&&!empty($_POST['password']))
            {
                if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL))
                {
                  echo '<script>alert("Le mail est incorrect");</script>';
                }
               // try {
                    include("dbconn.php");
                    
                  $mail=$_POST["mail"];
                  
                  $sql=$con->query("SELECT * FROM authentificate WHERE email = '$mail' ");
                  
                  //$query=$con->prepare($sql);
                  //$query->bindvalue(":mail",$_POST["mail"], PDO::PARAM_STR);
                 // $query->execute();
                  $user=$sql->fetch();
                  //var_dump($user);die;
                 // echo '<script>alert("Le mail est correct");</script>';
               // } catch (Exception $e) {
               //  echo '<script>alert("Le mail est INcorrect");</script>'. $e->getMessage();
                // }
                 if(!$user)
                 {
                    echo '<script>alert("Le mail est INcorrect");</script>';
                 }
                if(!password_verify($_POST["password"],$user["motdepasse"])) 
                {
                    echo '<script>alert("Le mail ou password est INcorrect");</script>';
                }
                else 
                     {
                        session_start();
                        $_SESSION["user"] =[  
                                            "nom" => $user["nom"],
                                            "prenom" => $user["prenom"],
                                            "mail" => $user["email"],
                                            ];
                        //var_dump($_SESSION);
                                    header("Location: home2.php");
                    }

            }
           else
            {
                echo'<script>alert("Le formulaire est incomplet");</script>';
            }
    }

}
?>