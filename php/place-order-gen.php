<?php
require dirname(__DIR__) . '/vendor/autoload.php';
include "controller.php";

use Dompdf\Dompdf;

$folder = "querilla";
$file_name = "invoice.pdf";

if (isset($_GET['payment_gen'])) {
    $lists = $_SESSION['Product'];
    $products = [];
    $total = 0;
    $total_qty = 0;
    if (count($lists) > 0) {

        $content = '<!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Invoice</title>
                    </head>';
        $content .= '<style>';
        $content .= "  @font-face {
                          font-family: 'OpenSans-Regular';
                          font-style: normal;
                          font-weight: normal;
                          src: url(http://" . $_SERVER['SERVER_NAME'] . "/" . $folder . "/fonts/OpenSans/OpenSans-Regular.ttf) format('truetype');
                        }";
        $content .= "  @font-face {
                          font-family: 'OpenSans-Bold';
                          font-style: normal;
                          font-weight: 700;
                          src: url(http://" . $_SERVER['SERVER_NAME'] . "/" . $folder . "/fonts/OpenSans/OpenSans-Bold.ttf) format('truetype');
                        }";
        $content .= "table thead tr td{
                        font-family: 'OpenSans-Bold';
                    }";
        $content .= "body,*{
                        font-family: 'OpenSans-Regular';
                    }";
        $content .= "thead{color:#555;background:#ddd;}";
        $content .= "thead td{padding:.3rem .7rem}";
        $content .= "tbody td{padding:.3rem .7rem;color:#555;border-top:1px solid #aaa}";
        $content .= "tfoot{border-top:1.7px solid #aaa;}";
        $content .= "tfoot td{padding:.3rem .7rem;color:#555;}";
        $content .= "hr{height:1.1px;background:#aaa;border:none}";
        $content .= "p{font-size:15px;text-align:right}";
        $content .= "h1{text-align:right;}p{color:#555}";
        $content .= '</style>';

        $content .= "<h1>Invoice</h1><br>";
        $content .= "<p><b>Invoice Date:</b> ";
        $content .= date('d/m/Y');
        $content .= "</p><br><br><br>";
        $content .= "<table width='100%'>
                        <thead>
                            <tr>
                                <td width='10%'>S.no</td>
                                <td width='70%'>Item</td>
                                <td width='12%'>Quantity</td>
                                <td width='8%'>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                ";
        for ($i = 0; $i < count($lists); $i++) {
            $product_id = $lists[$i]['product_id'];
            $p_query = $config->query("select id,title,description,price from products where id='$product_id'");
            $product = mysqli_fetch_assoc($p_query);
            $products[$i]['product'] = $product;
            $products[$i]['quantity'] = $lists[$i]['quantity'];
            $products[$i]['sub_total'] = $product['price'] * $lists[$i]['quantity'];
            $total += $product['price'] * $lists[$i]['quantity'];
            $total_qty += $lists[$i]['quantity'];

            $content .= "<tr>";
            $content .= "<td>" . ($i + 1) . "</td>";
            $content .= "<td>" . $product['title'] . "</td>";
            $content .= "<td style='text-align: center'>" . $lists[$i]['quantity'] . "</td>";
            $content .= "<td>$" . $product['price'] * $lists[$i]['quantity'] . "</td>";
            $content .= "</tr>";
        }

        $content .= "</tbody><br>";
        $content .= "<tfoot>
                            <tr>
                                <td width='10%'></td>
                                <td width='70%'><b>Total:</b></td>
                                <td style='text-align: center' width='12%'>";
        $content .= $total_qty;
        $content .= "</td><td width='8%'>$";
        $content .= $total;
        $content .= "</td></tr></tfoot>";
        $content .= "</table>";

        $content .= '<body>';

        $content .= "<br><br><br><br><p style='text-align: center;font-style: italic'>Virtual Office Registered 321 – 323 High Road Chadwell Heath RM6 6AX United Kingdom</p>";


        $content .= "</body></html>";
        $dompdf = new Dompdf();
        $dompdf->loadHtml($content);
        $options = $dompdf->getOptions();
        $options->setDefaultFont('Roboto');
        $dompdf->setOptions($options);
        $dompdf->render();
        $output = $dompdf->output();
        file_put_contents($file_name, $output);

        $mail = new \PHPMailer\PHPMailer\PHPMailer();

        $mail->IsSMTP();
        $mail->Host = 'premium59.web-hosting.com';
        $mail->Port = '465';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@studyremit.de';
        $mail->Password = 'h5P-!WziRE0^';
        $mail->SMTPSecure = 'ssl';
        $mail->From = 'noreply@studyremit.de';
        $mail->FromName = 'Querilla';
        $mail->AddAddress('zahidmzhmm@gmail.com', 'Zahid');
        $mail->WordWrap = 50;
        $mail->IsHTML(true);
        $mail->AddAttachment($file_name);
        $mail->Subject = 'Invoice Generated';
        $mail->Body = 'Please Find Invoice in attach PDF File.';
        if ($mail->Send()) {
            $_SESSION['success'] = "Success";
        }
        unlink($file_name);
        header("location:../cart.php");
    }
}