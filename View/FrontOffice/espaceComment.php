<?php 
include_once '../../Controller/FrontOffice/affichageCommentaire.php';
$spec=$_GET['specId'];
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
        var user=document.getElementsByClassName("font-medium");
        // Looping over tables
        for (var i = 0; i < comments.length; i++) {
 
            // Get the ith table
            var table = comments[i];
            var table1 = buttonModifier[i];
            var table2 = buttonAnnuler[i];
            var table3 = user[i];
            // Set the id dynamically
            table.setAttribute("id", i + 1);
            table1.setAttribute("value", i + 1);
            table2.setAttribute("value", i + 1);
            table3.setAttribute("id","user"+(i + 1));
        }
 function openForm(btn) {  
    //temp=document.getElementById("user"+btn).innerHTML; //I USE THIS TO GET USERNAME
    
    //if(temp=="118") //I PLACED AN ID HERE BUT I SHOULD PUT THE SESSION USERNAME INSTEAD OF 118        
    //{
        document.getElementById(btn).style.display = "block";
   // }
    
}

function closeForm(btn) {
    //temp=document.getElementById("user"+btn).innerHTML; //I USE THIS TO GET USERNAME
    
    //if(temp=="118") //I PLACED AN ID HERE BUT I SHOULD PUT THE SESSION USERNAME INSTEAD OF 118        
  //  {
        document.getElementById(btn).style.display = "none";
//    }
}
</script>

</body>
</html>
