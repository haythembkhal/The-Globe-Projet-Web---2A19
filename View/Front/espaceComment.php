<?php 
include_once '../../Controller/affichageCommentaire.php';
session_start();
$spec=$_SESSION["idSpectacle"];
?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="comment.css">
</head>
<body>
<div class="row d-flex justify-content-center mt-100 mb-100">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="card-title">Les Commentaires</h4>
                <p id="userid" hidden><?php echo $_SESSION['id_client'];?></p>
            </div>
            <div class="comment-widgets">
         <?php  
        afficherCommentaire($spec);
         ?>
                </div>
            </div> <!-- Card -->
        </div>
    </div>
</div>
<script>
        // Getting the table element
        var comments = document.getElementsByClassName("comments");
        var buttonModifier=document.getElementsByClassName("modifier");
        var buttonAnnuler=document.getElementsByClassName("annuler");
        var user=document.getElementsByClassName("userid");
        var del=document.getElementsByClassName("del");
        // Looping over tables
        for (var i = 0; i < comments.length; i++) {
 
            // Get the ith table
            var table = comments[i];
            var table1 = buttonModifier[i];
            var table2 = buttonAnnuler[i];
            var table3 = user[i];
            var table4 = del[i];
            // Set the id dynamically
            table.setAttribute("id", i + 1);
            table1.setAttribute("value", i + 1);
            table2.setAttribute("value", i + 1);
            table3.setAttribute("id","user"+(i + 1));
            table4.setAttribute("id","del"+(i + 1));
        }
function allowDelete(btn) {  
    currentUserId=document.getElementById("userid").innerHTML
    temp=document.getElementById("user"+btn).innerHTML; //I USE THIS TO GET USERNAME
    // if(temp!=currentUserId) //I PLACED AN ID HERE BUT I SHOULD PUT THE SESSION USERNAME INSTEAD OF       
    // {
        // document.getElementById("del"+btn).disabled = true;
    // }
}
 function openForm(btn) {  
    currentUserId=document.getElementById("userid").innerHTML
    temp=document.getElementById("user"+btn).innerHTML; //I USE THIS TO GET USERNAME
    if(temp==currentUserId) //I PLACED AN ID HERE BUT I SHOULD PUT THE SESSION USERNAME INSTEAD OF       
    {
        document.getElementById(btn).style.display = "block";
    }
    
}

function closeForm(btn) {
    temp=document.getElementById("user"+btn).innerHTML; //I USE THIS TO GET USERNAME
    currentUserId=document.getElementById("userid").innerHTML    
    if(temp==currentUserId) //I PLACED AN ID HERE BUT I SHOULD PUT THE SESSION USERNAME INSTEAD OF 118        
   {
        document.getElementById(btn).style.display = "none";
   }
}
</script>

</body>
</html>