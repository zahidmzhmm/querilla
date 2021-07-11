<?php
include "../php/controller.php";
if (!isset($_SESSION['Admin'])){
    header("location:login.php");
}
$title = "Home";
require_once "includes/header.php";
?>
      <section id="main-content">
          <section class="wrapper site-min-height">
              Welcome
          </section>
      </section>
<?php
require_once "includes/footer.php";
?>
