<?php
include "php/controller.php";
$select = $config->query("select * from products where status='1' order by id desc ");
$num_rows = mysqli_num_rows($select);
$title = "DISCOVER NOW";
include "includes/header.php";
?>
    <header class="reg_header">
        <div class="container pt-3 text-center">
            <div class="text">
                <h2>The Process of Ordering for Revision Papers</h2>
                <p><a href="index.php">Home</a> / Order Process</p>
            </div>
        </div>
    </header>
    <div class="container my-5 py-5">
        <p>The process of ordering for our <b>revision papers </b>is quite simple. You only need a couple of minutes to finish it.</p>
        <h5 class="mt-4 mb-2 ml-4">1.	Search for the revision papers that you are in need of</h5>
        <p class="my-3">While at this stage of the ordering process, you are supposed to browse our database that has numerous revision papers until you locate the revision papers that you are in need of. If by any chance you do not find whatever you are looking for you should contact our client support team so that we can organize how to prepare your desired revision papers from scratch.</p>
        <h5 class="mt-4 mb-2 ml-4">2.	Add them to cart</h5>
        <p>Once you have located the revision materials that you are in need of, you need to click on them. This should be followed by adding them to cart.</p>
        <h5 class="mt-4 mb-2 ml-4">3.	Sign up</h5>
        <p>If you are a new visitor to our website, you need to create an account first. It is easy to create such an account as all that you are required to provide is your name, email address, username and password.</p>
        <h5 class="mt-4 mb-2 ml-4">4.	Log in</h5>
        <p>After successfully creating your account, you need to log in. To do this, you will need to provide your email address or username and the password that you used when creating your account.</p>
        <h5 class="mt-4 mb-2 ml-4">5.	Check out</h5>
        <p>Once you have successfully logged in, you will be able to confirm your order details together with the amount that you are expected to pay.</p>
        <h5 class="mt-4 mb-2 ml-4">6.	Pay</h5>
        <p>After confirming the revision papers that you would like to buy, you should proceed to paying using any of the available payment options.</p>
        <h5 class="mt-4 mb-2 ml-4">7.	Confirm payment</h5>
        <p>After paying, you will receive confirmation from us acknowledging having received the payment.</p>
        <h5 class="mt-4 mb-2 ml-4">8.	Receive the revision papers </h5>
        <p>We shall then send you the ordered papers to the email address that you have provided us with. Alternatively, we shall guide you on how to download the papers from the personal client account created on our website.</p>
        <p class="mt-4">If you encounter any challenges completing this ordering process then you should not hesitate to contact our online client support team. This team works round the clock. This means that they shall be sure to respond to your queries quite promptly. We are eagerly waiting to join numerous students who have already discovered the great benefits of using our <b>dependable revision papers.</b> You will without a doubt be impressed by how affordable these papers are compared to their quality.</p>
    </div>
<?php include "includes/footer.php"; ?>