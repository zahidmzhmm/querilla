<?php
include "php/controller.php";
$select = $config->query("select * from products where status='1' order by id desc ");
$num_rows = mysqli_num_rows($select);
$title = "Clients’ Testimonials";
include "includes/header.php";
?>
    <header class="reg_header">
        <div class="container pt-3 text-center">
            <div class="text">
                <h2>Clients’ Testimonials</h2>
                <p><a href="index.php">Home</a> / Testimonials</p>
            </div>
        </div>
    </header>
    <div class="container py-3">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- index_page -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-4574787651313621"
             data-ad-slot="6201557053"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
<div class="container my-5 py-5">
    <div class="my-4">
        <p>Before I started using revision papers from <b>querilla.com,</b> I used to panic whenever I was about to take my exams. I must admit that past papers from you guys have really helped me in Preparing for exams</p>
        <h5 class="mt-2">-Harry, England</h5>
    </div>
    <div class="my-4">
        <p>Many thanks guys for the coding revision papers that you guys have been offering me. I really admire the way in which you regularly update your directory of revision papers. </p>
        <h5 class="mt-2">- Emily, UK</h5>
    </div>
    <div class="my-4">
        <p>Being a part-time student, I always have struggled with getting reliable online tutoring services. This is because I usually have such a tight schedule. I’m glad that you have flexible tutoring schedules that ensure that even people like me are accommodated.</p>
        <h5 class="mt-2">- Sam, Indiana</h5>
    </div>
    <div class="my-4">
        <p>I could swear that this is one of the companies that have the friendliest online tutors. Learning has become quite fun since I started working with a tutor from this website. I couldn’t ask for more!</p>
        <h5 class="mt-2">- Libby, Sweden</h5>
    </div>
    <div class="my-4">
        <p>The fact that you guys have among the best online tutors and your services are quite affordable is really interesting. I really enjoy the discounts that you are generous enough to offer me.</p>
        <h5 class="mt-2">- Emma, New York</h5>
    </div>
    <div class="my-4">
        <p>I didn’t believe that it was possible to get custom revision papers prior to discovering this website. I will most assuredly be recommending this site to my friends. </p>
        <h5 class="mt-2">- Oliver, Florida</h5>
    </div>
    <div class="my-4">
        <p>Personally, I consider time management very serious. As a result of this, I get super annoyed when the product that I order for are delivered late. I really like ordering for your products because you always deliver them on time. Kudos!</p>
        <h5 class="mt-2">- Charlotte, Autralia</h5>
    </div>
    <div class="my-4">
        <p>There is no disputing the fact that you offer top quality revision papers. I would very confidently recommend any student who would like to improve his/her writing skills or grades to consult you guys. You have been such a blessing to my life. </p>
        <h5 class="mt-2">- Khalifa, UAE</h5>
    </div>
    <div class="my-4">
        <p>I’m really impressed by the innovative online tutoring tools that you guys use. I consider myself to be really lucky for having discovered this site.</p>
        <h5 class="mt-2">- Malthe, Denmark</h5>
    </div>
    <div class="my-4">
        <p>Unlike other firms that I have visited in the recent past, this one has a simple yet effective ordering process. I like the fact that I do not waste a lot of time ordering this process. Other online companies have quite a lot to learn from you guys!</p>
        <h5 class="mt-2">- Claire, Oxford</h5>
    </div>
    <div class="my-4">
        <p>We it not the fact that you guys work on a 24/7 basis I don’t know if I would have managed to complete my paper on time. Thanks a lot for responding promptly responding to my queries. I’m indeed quite grateful. </p>
        <h5 class="mt-2">- Noah, Auckland</h5>
    </div>
    <div class="my-4">
        <p>At first I was skeptical about ordering for your services. I’m glad I gathered enough courage to place an order at your website as the product that I received surpassed my expectations.</p>
        <h5 class="mt-2">- Omar, UAE</h5>
    </div>
    <div class="my-4">
        <p>I’m really looking forward to working with the same tutor in the next semester. I think we have created such an amazing rapport with her!</p>
        <h5 class="mt-2">- William, Australia</h5>
    </div>
    <div class="my-4">
        <p>I wish I had known this website much sooner. Since I started ordering for your services my grades have significantly improved. I must also admit that my life as a student has become more enjoyable. </p>
        <h5 class="mt-2">- Alice, New Mexico</h5>
    </div>
    <div class="my-4">
        <p>Before discovering you guys I was thinking about dropping my Math’s class. Now that I have been working with an online tutor from your company I’m slowly beginning to love Math’s. It might even become one of my favorite subjects. Who knows! </p>
        <h5 class="mt-2">-Francis, Maryland </h5>
    </div>
</div>
<?php include "includes/footer.php"; ?>