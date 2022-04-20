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
function openForm() {
  document.getElementById("myText").style.display = "block";
}

function closeForm() {
  document.getElementById("myText").style.display = "none";
}
</script>
</body>
</html>
