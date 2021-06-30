<?php 
session_start();
include ("./Page/database/connect.php");
include ('./include/page-header.php');
if (!isset($_SESSION["id"])){header("location: ./page-login.php");}

?>

    <div id="right-panel" class="right-panel">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
          
        </div>

        <div class="content mt-12">
		</div>
	</div>
<?php 

include ('./include/page-footer.php');
?>


   