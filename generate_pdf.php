<?php

        require 'vendor/autoload.php';
        use Dompdf\Dompdf;



if (isset($_POST['submit_val'])) {


    $dompdf = new Dompdf();
    $dompdf->loadHtml('

<body style="transform: scale(1.03);">

<div class="d-flex d-flex justify-content-between">
    <img src="assets/img/779b6ff4-2bc3-4abd-981b-823564ba33d6.jpg">
    <img src="assets/img/4a464235-0e83-49ef-9560-c155601312d7.jpg">
</div>

    <h4 style="text-align: center;"><span style="text-decoration: underline;">AUTHORIZATION LETTER</span></h4>
    <p style="filter: blur(0px);transform: scale(0.94);">This is authorise the following guest (s) to occupy and use my unit located at Tower ' . $_POST['unit'] . ' unit for the period covering from ' . $_POST['from'] . ' to ' . $_POST['to'] . ' .</p>
    <p style="filter: blur(0px);transform: scale(0.89);">This is to certify that I have oriented my guest(s) on the existing house rules and regulations of Jazz Residences (including some of the most applicable house rules itemised below) and that any violations that will be committed by my guest(s) will be my liability to the Condominium Corporation.</p>
    <p style="filter: blur(0px);transform: scale(0.89);padding-right: 429px;margin-right: 6px;margin-left: -1px;">Given this ' . $_POST['this'] . ' day of ' . $_POST['day'] . ' ,20' . $_POST['year'] . '.</p>
    <p style="filter: blur(0px);transform: scale(0.89);margin-right: 6px;padding-right: 0px;margin-left: 498px;padding-bottom: 0px;text-align: center;padding-top: 0px;margin-top: -21px;">Signature over Printed Name of<br />Unit Owner or Authorized Representative</p>
    <h4 style="text-align: left;transform: perspective(0px) scale(0.91);font-size: 18.704px;"><span style="text-decoration: underline;">HOUSE RULES AND REGULATIONS:</span><br /></h4>
    <p style="filter: blur(0px);transform: scale(0.89);text-align: left;">1.No pets of any kind is allowed within the complex.<br />2.Jazz Residences is a No-Smoking complex, no smoking policy is observed in all common areas within the complex.<br />3.Swimming pool may be used by the authorized guests) provided they pay the corresponding fees (Php<br />150.00 for REGULAR days and Php 300.00 for HOLIDAYS. Posted swimming pool rules and regulations<br />shall be strictly followed by all authorized guests.<br />4.Gym facilities is for the exclusive use of unit owners and tenants ONLY. Gym is off limits to guests.<br />5.No parking slot is available for guest(s).</p>
    <h4 style="text-align: left;transform: perspective(0px) scale(0.91);font-size: 18.704px;">GUEST HANDLING POLICY AND PROCEDURE<br /></h4>
    <p style="filter: blur(0px);transform: scale(0.89);text-align: left;">1. The authorization letter form should be duly filled up by the unit owner or authorized representative.<br />2. The authorization letter should be submitted at least one (1) day prior to the arrival of guest.<br />3. At least one (1) valid proof of identification is to be presented and be used as an attachment for the<br />authorization letter. For foreigners, a copy of the passport should be presented and attached.<br />4.The guest is not allowed to move in unless the authorization letter is duly submitted and acknowledged by the Property Management Office.<br />5. The unit owner / authorized representative is responsible for the welfare of the guest during the duration of the stay inside the unit.<br />6. For security and safety purposes, guests will go through bag check-up procedures upon arrival at Jazz<br />Residences.<br />7. For safety and security purposes, the residential units shall not be used as an office, boarding house,<br />dormitory, transient or other &quot;bed space type&quot; establishment.<br />8. All unit owners, tenants, and/or residents of the building, guest, building personnel, contractors and<br />service providers are REQUIRED to follow and comply with the governing House Rules and Regulations to<br />avoid property and personal risk as well as inconvenience as a consequence of violation/s of the<br />provisions of the House Rules.</p>
    <p class="text-end" style="filter: blur(0px);transform: scale(0.89);text-align: center;padding-top: 0px;margin-top: -22px;padding-right: 0px;margin-bottom: -2px;margin-left: -8px;padding-left: 365px;"></p>
</body>
');
    $random = md5(rand());
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("sheet.pdf", array("Attachment" => 0));
    $output = $dompdf->output();
    file_put_contents("file_$random.pdf",$output);

    exit(0);
}
?>