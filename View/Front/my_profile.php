<?php
include '../../Controller/userC.php';
session_start();
if(!isset($_SESSION['loggedIn']) )
    header('location:sign_in.php');
else if($_SESSION['loggedIn'] != true)
    header('location:sign_in.php');
/*$username=$_SESSION["username"];
$firstname=$_SESSION["firstname"];
$lastname=$_SESSION["lastname"];
$email=$_SESSION["email"];*/
//var_dump($username);
//die;
//$userID=$_SESSION["id_client"];
//$username=$_POST['username'];
//var_dump($username);
//die;
	
 if (isset($_POST['firstname'])&& isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email'])) {
        if (!empty($_POST['firstname'])&& !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email'])) {
            $customer = new User(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['username'],
                $_POST['email'],
                $_SESSION['password']
            );
            $success = 1;
			
			/*$nom=$emp->afficherEmploye();
			var_dump($nom);
			die;*/
			
			if($_SESSION['type']=="CUSTOMER PROFILE")
			{
			
			$userID=$_SESSION['id_client'];
			$client=new ClientC();
			$client->updateClient($customer,$userID);
			}
			else if($_SESSION['type']=="EMPLOYE PROFILE")
			{
				$userID=$_SESSION['id_employe'];
				$employe=new EmployeC();
				$employe->updateEmploye($customer,$userID);
				
			}
			//mettre a jour la page
			$_SESSION['firstname']=$_POST['firstname'];
			$_SESSION['lastname']=$_POST['lastname'];
			$_SESSION['username']=$_POST['username'];
			$_SESSION['email']=$_POST['email'];
			
			
		//	header('location:.php');
			
			
        } 
		else 
		{
            $error = "Missing information";
			
        }
    }
	
?>

<link href="style_profile.css" rel="stylesheet">

<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="https://www.creative-tim.com/product/argon-dashboard" target="_blank"><?php echo $_SESSION["type"];?></a>
		 <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="index_with_profil.php" target="_blank">HOME</a>
        <!-- Form -->
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="profil.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['lastname']." ".$_SESSION['firstname']?></span>
                </div>
              </div>
            </a>
           
          </li>
        </ul>
      </div>
    </nav>
	
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(spectacle.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $_SESSION['lastname']?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can view your information and post a testimonial about your experience with us.</p>
            <a href="#info" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="profil.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="../../Controller/logoutController.php" class="btn btn-sm btn-info mr-4">LogOut</a>
                <a href="#" class="btn btn-sm btn-default float-right">Photo</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">0</span>
                      <span class="description">Spectacles</span>
                    </div>
                    <div>
                      <span class="heading">0</span>
                      <span class="description">Achats</span>
                    </div>
                    <div>
                      <span class="heading">0</span>
                      <span class="description">Temoignages</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo $_SESSION['lastname']." ".$_SESSION['firstname']?><span class="font-weight-light">, 21</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Ariana, Tunisia
                </div>
      
                
                <hr class="my-4">
                <p>Convaincu que le divertissement peut etre un moyen efficace pour booster les performances. Passione des spectacles, du cinema, et des theatres.</p>
     
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#temoignage" class="btn btn-sm btn-primary">Temoignages</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label id="info" class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" name="username" class="form-control form-control-alternative" placeholder="Username" value=<?php echo $_SESSION['username']?>>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" name="email" class="form-control form-control-alternative" placeholder="moussa@example.com" value=<?php echo $_SESSION['email']?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" name="firstname" class="form-control form-control-alternative" placeholder="First name" value=<?php echo $_SESSION['firstname']?>>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" name="lastname" class="form-control form-control-alternative" placeholder="Last name" value=<?php echo $_SESSION['lastname']?>>
                      </div>
                    </div>
                  </div>
				  <input type="submit" class="btn btn-info" value="Confirm">
				  </form>
                </div>
				
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4" id="temoignage">Temoignages</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>Publier Un temoignage</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">Mon experience avec the goble a ete plus que satisfaisant. Je remercie l'equipe toute entiere</textarea><br>
					 <input type="submit" id='submit' class="btn btn-info" value='PUBLIER' >
                  </div>
                </div>
				
				<hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">OUR CONTACT</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="1,2 Rue André Ampère" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="Arina">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="Tunisia">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
				
				
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        <div class="copyright">
          <p>THE GOBLE-PROFILE ALLIANCE</p>
        </div>
      </div>
    </div>
  </footer>
</body>