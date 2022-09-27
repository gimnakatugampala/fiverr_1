<?php


// Convert to PDF
require 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;




if (isset($_POST['submit_val'])) {

    // $error = array();
    
    $units = $_POST["unit"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $thisW = $_POST["this"];
    $day = $_POST["day"];
    $year = $_POST["year"];
    $sign = $_POST["hidden_data"];
    $client_email = $_POST["user_email"];

    // Upload ed Images
    $image1_file_name = $_FILES["image1"]["name"];
    $image1_file_size = $_FILES["image1"]["size"];
    $image1_file_tmp = $_FILES["image1"]["tmp_name"];
    $image1_file_type = $_FILES["image1"]["type"];
    $error_1     = $_FILES['image1']['error'];

    $image2_file_name = $_FILES["image2"]["name"];
    $image2_file_size = $_FILES["image2"]["size"];
    $image2_file_tmp = $_FILES["image2"]["tmp_name"];
    $image2_file_type = $_FILES["image2"]["type"];

    $image3_file_name = $_FILES["image3"]["name"];
    $image3_file_size = $_FILES["image3"]["size"];
    $image3_file_tmp = $_FILES["image3"]["tmp_name"];
    $image3_file_type = $_FILES["image3"]["type"];




    $guestName1 = empty($_POST["guest_name1"]) ? '' : $_POST["guest_name1"];
    $guestSign1 = empty($_POST["sign_guest1"]) ? '' : $_POST["sign_guest1"];
    $guestID1 = empty($_POST["id_guest1"]) ? '' : $_POST["id_guest1"];
    $guestRelation1 = empty($_POST["relation_guest1"]) ? '' : $_POST["relation_guest1"];

    $guestName2 = empty($_POST["guest_name2"]) ? '' : $_POST["guest_name2"];
    $guestSign2 = empty($_POST["sign_guest2"]) ? '' : $_POST["sign_guest2"];
    $guestID2 = empty($_POST["id_guest2"]) ? '' : $_POST["id_guest2"];
    $guestRelation2 = empty($_POST["relation_guest2"]) ? '' : $_POST["relation_guest2"];

    $guestName3 = empty($_POST["guest_name3"]) ? '' : $_POST["guest_name3"];
    $guestSign3 = empty($_POST["sign_guest3"]) ? '' : $_POST["sign_guest3"];
    $guestID3 = empty($_POST["id_guest3"]) ? '' : $_POST["id_guest3"];
    $guestRelation3 = empty($_POST["relation_guest3"]) ? '' : $_POST["relation_guest3"];

    $guestName4 = empty($_POST["guest_name4"]) ? '' : $_POST["guest_name4"];
    $guestSign4 = empty($_POST["sign_guest4"]) ? '' : $_POST["sign_guest4"];
    $guestID4 = empty($_POST["id_guest4"]) ? '' : $_POST["id_guest4"];
    $guestRelation4 = empty($_POST["relation_guest4"]) ? '' : $_POST["relation_guest4"];

    $guestName5 = empty($_POST["guest_name5"]) ? '' : $_POST["guest_name5"];
    $guestSign5 = empty($_POST["sign_guest5"]) ? '' : $_POST["sign_guest5"];
    $guestID5 = empty($_POST["id_guest5"]) ? '' :  $_POST["id_guest5"];
    $guestRelation5 = empty($_POST["relation_guest5"]) ? '' : $_POST["relation_guest5"];




    //Getting image
    $imgpath='<img width="220" height="220" src="'.$sign.'">';
    $img_vc='<img  src="'.$image1_file_name.'">';
    $img_id_front='<img   src="'.$image2_file_name.'">';
    $img_id_back='<img    src="'.$image3_file_name.'">';

        // // Store the Images
        // $file_ext_1 = strtolower(end(explode('.',$_FILES["image1"]["name"])));
        // $file_ext_2 = strtolower(end(explode('.',$_FILES["image2"]["name"])));
        // $file_ext_3 = strtolower(end(explode('.',$_FILES["image3"]["name"])));
    
        // $extensions = array("jpeg","jpg","png");
    
        // if(in_array($file_ext_1,$extensions) == false || in_array($file_ext_2,$extensions) == false || in_array($file_ext_3,$extensions) == false){
        //     $error[] = "Incorrect File Format";
        // }
    
        if(empty($error) == true){
            move_uploaded_file($image1_file_tmp , $image1_file_name);
            move_uploaded_file($image2_file_tmp , $image2_file_name);
            move_uploaded_file($image3_file_tmp , $image3_file_name);
        }
    
    
    


    

    $options = new Options;
    $options->setChroot(__DIR__);
    $options->set('isRemoteEnabled', TRUE);
    $options->set('tempDir', '/home2/directory/public_html/directory/pdf-export/tmp');


    // Convert to PDF
    $dompdf = new Dompdf($options);


    $html = file_get_contents("template.html");

    $html = str_replace(["{{u}}" , "{{f}}","{{t}}","{{th}}","{{d}}","{{y}}","{{i}}","{{GN1}}","{{GS1}}","{{GID1}}","{{GR1}}","{{GN2}}","{{GS2}}","{{GID2}}","{{GR2}}","{{GN3}}","{{GS3}}","{{GID3}}","{{GR3}}","{{GN4}}","{{GS4}}","{{GID4}}","{{GR4}}","{{GN5}}","{{GS5}}","{{GID5}}","{{GR5}}","{{IMG1}}","{{IMG2}}","{{IMG3}}"],[$units,$from,$to,$thisW,$day,$year,$imgpath,$guestName1,$guestSign1,$guestID1,$guestRelation1,$guestName2,$guestSign2,$guestID2,$guestRelation2,$guestName3,$guestSign3,$guestID3,$guestRelation3,$guestName4,$guestSign4,$guestID4,$guestRelation4,$guestName5,$guestSign5,$guestID5,$guestRelation5,$img_vc,$img_id_front,$img_id_back],$html);

    $dompdf->loadHtml($html);
    
    $random = md5(rand());
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    
    $dompdf->addInfo("Title","Filled Form");

    $dompdf->stream("sheet.pdf", array("Attachment" => 0));
    $output = $dompdf->output();

    // // Save the PDF
    file_put_contents("file_$random.pdf",$output);



    $content = file_get_contents("file_$random.pdf");
    $content = chunk_split(base64_encode($content));

    // $content_img_1 = file_get_contents($image1_file_name);
    // $content_img_1 = chunk_split(base64_encode($content_img_1));

    // $content_img_2 = file_get_contents($image2_file_name);
    // $content_img_2 = chunk_split(base64_encode($content_img_2));





    // SEND EMAIL
    $name = 'Client';
    $email = 'paicanpam@gmail.com';
    $usermessage = 'Just Email';
    
    $message ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $usermessage; 
    
    $subject ="Authorization Letter New User";
    $fromname ="Authorization Letter Admin";
    $fromemail = 'noreply@codeconia.com';  //if u dont have an email create one on your cpanel

    $mailto = 'paicanpam@gmail.com,'.$client_email;  //the email which u want to recv this email

    // $content = file_get_contents("file_$random.pdf");
    // $content = chunk_split(base64_encode($content));

    // $content_img_1 = file_get_contents($image1_file_name);
    // $content_img_1 = chunk_split(base64_encode($content_img_1));
  


    // a random hash will be necessary to send mixed content
    $separator = md5(time());
    // carriage return type (RFC)
    $eol = "\r\n";
    // main header (multipart mandatory)
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;
    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    // $body .= $content;
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . "file_$random.pdf" . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

      
    // $body .= "--" . $separator . $eol;
    // $body .= "Content-Type: application/octet-stream; name=\"" . "$image1_file_name" . "\"" . $eol;
    // $body .= "Content-Transfer-Encoding: base64" . $eol;
    // $body .= "Content-Disposition: attachment" . $eol;
    // $body .= $content_img_1 . $eol;
    // $body .= "--" . $separator . "--";

    // $body .= "--" . $separator . $eol;
    // $body .= "Content-Type: application/octet-stream; name=\"" . "$image2_file_name" . "\"" . $eol;
    // $body .= "Content-Transfer-Encoding: base64" . $eol;
    // $body .= "Content-Disposition: attachment" . $eol;
    // $body .= $content_img_2 . $eol;
    // $body .= "--" . $separator . "--";
    




    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // do what you want after sending the email
        
        
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }

    unlink("file_$random.pdf");
    unlink($image1_file_name);
    unlink($image2_file_name);
    unlink($image3_file_name);




    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fiverr Poject</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/css/table.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/file-uploader.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.3.5/signature_pad.min.js" integrity="sha512-kw/nRM/BMR2XGArXnOoxKOO5VBHLdITAW00aG8qK4zBzcLVZ4nzg7/oYCaoiwc8U9zrnsO9UHqpyljJ8+iqYiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body class="container">


    <div class="row text-center">
        <div class="col-md-4">
        <img src="assets/img/779b6ff4-2bc3-4abd-981b-823564ba33d6.jpg">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <img src="assets/img/4a464235-0e83-49ef-9560-c155601312d7.jpg">
        </div>
    </div>

<form action="index.php" method="post" target="_blank" enctype="multipart/form-data">
    <h4 style="text-align: center;"><span style="text-decoration: underline;">AUTHORIZATION LETTER</span></h4>
    </br>


    <p class="first-container">This is authorise the following guest (s) to occupy and use my
        unit located at Tower
        <input type="text" id="unit" name="unit">unit for the period covering from&nbsp;
        <input type="text" id="from" name="from"> to&nbsp;
        <input type="text" id="to" name="to"> .
    </p>


    <div id="main">
    <div class="table-responsive">    
        <table id="data" class="table">
            <tbody>
            <tr>
                <td><h6>Name of Guest(s)</h6></td>
                <td><h6>Signature of Guest(s)</h6></td>
                <td><h6>Proof of Identification</h6></td>
                <td><h6>Relationship with Unit Owner</h6></td>
                <!-- <td><h6>Delete</h6></td> -->
            </tr>
            <!-- <tr>
                <td><input name="guest_name1" type="text"/></td>
                <td><input name="sign_guest1" type="text"/></td>
                <td><input name="id_guest1" type="text"/></td>
                <td><input name="relation_guest1" type="text"/></td>
                <td><a class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)"><i
                                class="fa fa-trash-o fa-fw"></i></a></td>
            </tr> -->

            <tr>
                <td><input name="guest_name1" type="text"/></td>
                <td><input name="sign_guest1" type="text"/></td>
                <td><input name="id_guest1" type="text"/></td>
                <td><input name="relation_guest1" type="text"/></td>
            </tr>

            <tr>
                <td><input name="guest_name2" type="text"/></td>
                <td><input name="sign_guest2" type="text"/></td>
                <td><input name="id_guest2" type="text"/></td>
                <td><input name="relation_guest2" type="text"/></td>
            </tr>

            <tr>
                <td><input name="guest_name3" type="text"/></td>
                <td><input name="sign_guest3" type="text"/></td>
                <td><input name="id_guest3" type="text"/></td>
                <td><input name="relation_guest3" type="text"/></td>
            </tr>

            <tr>
                <td><input name="guest_name4" type="text"/></td>
                <td><input name="sign_guest4" type="text"/></td>
                <td><input name="id_guest4" type="text"/></td>
                <td><input name="relation_guest4" type="text"/></td>
            </tr>

            <tr>
                <td><input name="guest_name5" type="text"/></td>
                <td><input name="sign_guest5" type="text"/></td>
                <td><input name="id_guest5" type="text"/></td>
                <td><input name="relation_guest5" type="text"/></td>
            </tr>
       
            <!-- <input name="rows_amount" id='rows_amount' type="hidden"/> -->
        </table>
</div>

    </div>

    <!-- <div class="pull-right">
        <input type="button" value="Add" class="btn btn-success my-3 d-flex  top-buffer" onclick="addRow('data')">
    </div> -->

    <br>
    <br>

    <div class="my-5 sub-form-container">
    <p>This is to certify that I have oriented my guest(s) on the
        existing
        house rules and regulations of Jazz Residences (including some of the most applicable house rules itemised
        below)
        and that any violations that will be committed by my guest(s) will be my liability to the Condominium
        Corporation.
    </p>

    <p>
    
    Given this
        <input class="" type="text" required="" inputmode="numeric" maxlength="10" name="this">day of

        <input type="text"  required="" inputmode="numeric"  maxlength="2" name="day">&nbsp;,20
            
        <input type="text" required="" inputmode="numeric" maxlength="2" name="year">.
      </p>

      <div>

    
        <!-- Signature Pad -->
        <div class="row text-center">
            <div class="m-auto col-md-7">

            <div class="user_email_container text-center">
                
                <div>
                    <input type="email" name="user_email">
                    <p class="user-email-text">Enter Your Email</p>
                </div>
            </div>


            </div>
                <div class="col-md-5 sg-pad-container">
                <div class="sg-pad">
                <div class="flex-row">
                    <div class="wrapper">
                        <canvas id="signature-pad" width="400" height="200"></canvas>
                    </div>    

                    <div class="d-flex justify-content-between my-2">
                        <a class="btn btn-primary" href="#" id="clear"> Clear</a>
                        <input class="confirm-sign-btn" type="button" onclick="uploadEx()" value="Confim" />
                    </div>
                </div>
                
                <!-- <form action="signature.php" method="post" accept-charset="utf-8" name="form1"> -->
                    <input name="hidden_data" id='hidden_data' type="hidden"/>
                    
		        <!-- </form> -->
                

                
                    <!-- Signature Pad -->
            
                <p class="my-3 sg-pad-text">Signature over Printed Name of<br>Unit Owner or Authorized Representative</p>

                </div>
                </div>
        </div>



    
    <h4 style="text-align: left;transform: perspective(0px) scale(0.91);font-size: 18px;">
    <span style="text-decoration: underline;">HOUSE RULES AND REGULATIONS:</span><br></h4>
        
    <p class="rules-1">1.No pets of any kind is allowed within the
        complex.<br>2.Jazz Residences is a No-Smoking complex, no smoking policy is observed in all common areas within
        the
        complex.<br>3.Swimming pool may be used by the authorized guests) provided they pay the corresponding fees
        (Php<br>150.00
        for REGULAR days and Php 300.00 for HOLIDAYS. Posted swimming pool rules and regulations<br>shall be strictly
        followed by all authorized guests.<br>4.Gym facilities is for the exclusive use of unit owners and tenants ONLY.
        Gym
        is off limits to guests.<br>5.No parking slot is available for guest(s).</p><h4
            style="text-align: left;transform: perspective(0px) scale(0.91);font-size: 18px;text-decoration: underline;">GUEST HANDLING POLICY
        AND
        PROCEDURE<br></h4>

    <p class="rules-2">1. The authorization letter form should be
        duly
        filled up by the unit owner or authorized representative.<br>2. The authorization letter should be submitted at
        least one (1) day prior to the arrival of guest.<br>3. At least one (1) valid proof of identification is to be
        presented and be used as an attachment for the<br>authorization letter. For foreigners, a copy of the passport
        should be presented and attached.<br>4.The guest is not allowed to move in unless the authorization letter is
        duly
        submitted and acknowledged by the Property Management Office.<br>5. The unit owner / authorized representative
        is
        responsible for the welfare of the guest during the duration of the stay inside the unit.<br>6. For security and
        safety purposes, guests will go through bag check-up procedures upon arrival at Jazz<br>Residences.<br>7. For
        safety
        and security purposes, the residential units shall not be used as an office, boarding house,<br>dormitory,
        transient
        or other "bed space type" establishment.<br>8. All unit owners, tenants, and/or residents of the building,
        guest,
        building personnel, contractors and<br>service providers are REQUIRED to follow and comply with the governing
        House
        Rules and Regulations to<br>avoid property and personal risk as well as inconvenience as a consequence of
        violation/s of the<br>provisions of the House Rules.</p>
    <p class="text-end"
       style="filter: blur(0px);transform: scale(0.89);text-align: center;padding-top: 0px;margin-top: -22px;padding-right: 0px;margin-bottom: -2px;margin-left: -8px;padding-left: 365px;"></p>

    <!-- Upload Area -->
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-6 col-xl-4">
                <div id="uploadArea" class="upload-area">
                    <!-- Header -->
                    <div class="upload-area__header">
                        <h1 class="upload-area__title">Upload Your vaccine card</h1>
                        <p class="upload-area__paragraph">
                            File should be an image
                            <strong class="upload-area__tooltip">
                                Like
                                <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                            </strong>
                        </p>
                    </div>
                    <!-- End Header -->
                    <!-- Drop Zoon -->
                    <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                            <span class="drop-zoon__icon">
                            <i class='bx bxs-file-image'></i>
                            </span>
                        <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                        <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                        <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image"
                             draggable="false">
                        <input type="file" name="image1" id="fileInput" class="drop-zoon__file-input" accept="image/*">
                    </div>
                    <!-- End Drop Zoon -->

                    <!-- File Details -->
                    <div id="fileDetails" class="upload-area__file-details file-details">
                        <h3 class="file-details__title">Upload Your vaccine card</h3>

                        <div id="uploadedFile" class="uploaded-file">
                            <div class="uploaded-file__icon-container">
                                <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
                            </div>

                            <div id="uploadedFileInfo" class="uploaded-file__info">
                                <span class="uploaded-file__name">Proejct 1</span>
                                <span class="uploaded-file__counter">0%</span>
                            </div>
                        </div>
                    </div>
                    <!-- End File Details -->
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-xl-4">
                <div id="uploadArea2" class="upload-area2">
                    <!-- Header -->
                    <div class="upload-area__header2">
                        <h1 class="upload-area__title2">Upload Your id card front</h1>
                        <p class="upload-area__paragraph2">
                            File should be an image
                            <strong class="upload-area__tooltip2">
                                Like
                                <span class="upload-area__tooltip-data2"></span> <!-- Data Will be Comes From Js -->
                            </strong>
                        </p>
                    </div>
                    <!-- End Header -->
                    <!-- Drop Zoon -->
                    <div id="dropZoon2" class="upload-area__drop-zoon drop-zoon2">
                        <span class="drop-zoon__icon2">
                        <i class='bx bxs-file-image'></i>
                        </span>
                        <p class="drop-zoon__paragraph2">Drop your file here or Click to browse</p>
                        <span id="loadingText2" class="drop-zoon__loading-text2">Please Wait</span>
                        <img src="" alt="Preview Image" id="previewImage2" class="drop-zoon__preview-image2"
                             draggable="false">
                        <input type="file" name="image2" id="fileInput2" class="drop-zoon__file-input2" accept="image/*">
                    </div>
                    <!-- End Drop Zoon -->

                    <!-- File Details -->
                    <div id="fileDetails2" class="upload-area__file-details file-details2">
                        <h3 class="file-details__title2">Upload Your Front ID Card</h3>

                        <div id="uploadedFile2" class="uploaded-file2">
                            <div class="uploaded-file__icon-container2">
                                <i class='bx bxs-file-blank uploaded-file__icon2'></i>
                                <span class="uploaded-file__icon-text2"></span> <!-- Data Will be Comes From Js -->
                            </div>

                            <div id="uploadedFileInfo2" class="uploaded-file__info2">
                                <span class="uploaded-file__name2">Proejct 1</span>
                                <span class="uploaded-file__counter2">0%</span>
                            </div>
                        </div>
                    </div>
                    <!-- End File Details -->
                </div>
            </div>


            <!-- 3 -->
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div id="uploadArea3" class="upload-area3">
                    <!-- Header -->
                    <div class="upload-area__header3">
                        <h1 class="upload-area__title3">Upload Your id card back</h1>
                        <p class="upload-area__paragraph3">
                            File should be an image
                            <strong class="upload-area__tooltip3">
                                Like
                                <span class="upload-area__tooltip-data3"></span> <!-- Data Will be Comes From Js -->
                            </strong>
                        </p>
                    </div>
                    <!-- End Header -->
                    <!-- Drop Zoon -->
                    <div id="dropZoon3" class="upload-area__drop-zoon drop-zoon3">
                        <span class="drop-zoon__icon3">
                        <i class='bx bxs-file-image'></i>
                        </span>
                        <p class="drop-zoon__paragraph3">Drop your file here or Click to browse</p>
                        <span id="loadingText3" class="drop-zoon__loading-text3">Please Wait</span>
                        <img src="" alt="Preview Image" id="previewImage3" class="drop-zoon__preview-image3"
                             draggable="false">
                        <input type="file" name="image3" id="fileInput3" class="drop-zoon__file-input3" accept="image/*">
                    </div>
                    <!-- End Drop Zoon -->

                    <!-- File Details -->
                    <div id="fileDetails3" class="upload-area__file-details file-details3">
                        <h3 class="file-details__title3">Upload Your Back ID Card</h3>

                        <div id="uploadedFile3" class="uploaded-file3">
                            <div class="uploaded-file__icon-container3">
                                <i class='bx bxs-file-blank uploaded-file__icon3'></i>
                                <span class="uploaded-file__icon-text3"></span> <!-- Data Will be Comes From Js -->
                            </div>

                            <div id="uploadedFileInfo3" class="uploaded-file__info3">
                                <span class="uploaded-file__name3">Proejct 1</span>
                                <span class="uploaded-file__counter3">0%</span>
                            </div>
                        </div>
                    </div>
                    <!-- End File Details -->
                </div>
            </div>


            <div class="my-5 d-flex justify-content-center">
                <button class="btn btn-primary btn-md" type="submit" name="submit_val" value="GENERATE PDF">Submit Form</button>
                <br/>
            </div>
        </div>
    </div>
    <!-- End Upload Area -->
</form>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.min.js"></script>
<script src="https://kit.fontawesome.com/b252434098.js" crossorigin="anonymous"></script>
<script src="assets/js/table.js"></script>
<script src="assets/js/file-uploader.js"></script>
<script src="assets/js/signature.js"></script>
<script>
    function uploadEx() {
        var canvas = document.getElementById("signature-pad");
        var dataURL = canvas.toDataURL("image/png");
        document.getElementById('hidden_data').value = dataURL;
        
    };
</script>

</body>
</html>
