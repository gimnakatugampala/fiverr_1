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

</head>
<body class="container">


<div class="d-flex d-flex justify-content-between">
    <img src="assets/img/779b6ff4-2bc3-4abd-981b-823564ba33d6.jpg">
    <img src="assets/img/4a464235-0e83-49ef-9560-c155601312d7.jpg">
</div>

<form action="generate_pdf.php" method="post">
    <h4 style="text-align: center;"><span style="text-decoration: underline;">AUTHORIZATION LETTER</span></h4>
    </br>


    <p style="filter: blur(0px);transform: scale(0.94);">This is authorise the following guest (s) to occupy and use my
        unit located at Tower
        <input type="text" id="unit"
               style="padding-left: 0px;padding-top: 0px;padding-right: 0px;transform: perspective(0px) translate(-2px);border-width: 2px;border-style: dotted;border-top-style: none;border-top-color: rgba(118,118,118,0);border-right-style: none;border-right-color: rgba(118,118,118,0);border-bottom-style: dotted;border-bottom-color: rgb(0,0,0);border-left-style: none;border-left-color: rgba(118,118,118,0);padding-bottom: 0px;margin-top: -6px;margin-bottom: -21px;width: 48px;text-align: center;margin-left: -1px;"
               name="unit">unit for the period covering from&nbsp;<input type="text" id="from"
                                                                         style="padding-left: 0px;padding-top: 0px;margin-top: -6px;padding-bottom: 0px;margin-bottom: -32px;margin-left: 7px;padding-right: 0px;transform: perspective(0px) translate(-2px);border-width: 2px;border-style: none;border-top-style: none;border-top-color: rgba(118,118,118,0);border-right-style: none;border-right-color: rgba(118,118,118,0);border-bottom-style: dotted;border-bottom-color: rgb(0,0,0);border-left-style: none;border-left-color: rgba(118,118,118,0);width: 67px;text-align: center;"
                                                                         name="from"> to&nbsp;<input type="text" id="to"
                                                                                                     style="padding-left: 0px;padding-bottom: 0px;padding-right: 0px;transform: perspective(0px) translate(-2px);border-width: 2px;border-style: none;border-top-style: none;border-top-color: rgba(118,118,118,0);border-right-style: none;border-right-color: rgba(118,118,118,0);border-bottom-style: dotted;border-bottom-color: rgb(0,0,0);border-left-style: none;border-left-color: rgba(118,118,118,0);margin-bottom: -13px;padding-top: 0px;margin-top: -11px;width: 73px;margin-left: 3px;text-align: center;"
                                                                                                     name="to"> .</p>


    <div id="main">
        <table id="data" class="data-table data-table-horizontal data-table-highlight">
            <tbody>
            <tr>
                <td><h6>Name of Guest(s)</h6></td>
                <td><h6>Signature of Guest(s)</h6></td>
                <td><h6>Proof of Identification</h6></td>
                <td><h6>Relationship with Unit Owner</h6></td>
                <td><h6>Delete</h6></td>
            </tr>
            <tr>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><a class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)"><i
                                class="fa fa-trash-o fa-fw"></i></a></td>
            </tr>
            <tr>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><a class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)"><i
                                class="fa fa-trash-o fa-fw"></i></a></td>
            </tr>
            <tr>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><a class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)"><i
                                class="fa fa-trash-o fa-fw"></i></a></td>
            </tr>
            <tr>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><input type="text"/></td>
                <td><a class="btn btn-danger" type="button" value="Delete" onclick="deleteRow(this)"><i
                                class="fa fa-trash-o fa-fw"></i></a></td>
            </tr>
        </table>

    </div>

    <div class="pull-right">
        <input type="button" value="Add" class="btn btn-success my-3 d-flex  top-buffer" onclick="addRow('data')"/>
    </div>

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
        <div class="sg-pad-container">
        <div class="sg-pad">
        <div class="flex-row">
            <div class="wrapper">
                <canvas id="signature-pad" width="400" height="200"></canvas>
            </div>    
        </div>
        <!-- <div class="clear-btn"> -->
            <a class="btn btn-primary" href="#" id="clear"> Clear</a>
        <!-- </div> -->
        
            <!-- Signature Pad -->
    
    
        <p class="my-3">Signature over Printed Name of<br>Unit Owner or Authorized Representative</p>

        </div>


        </div>



    
    <h4 style="text-align: left;transform: perspective(0px) scale(0.91);font-size: 18.704px;"><span
                style="text-decoration: underline;">HOUSE RULES AND REGULATIONS:</span><br></h4>
    <p style="filter: blur(0px);transform: scale(0.89);text-align: left;">1.No pets of any kind is allowed within the
        complex.<br>2.Jazz Residences is a No-Smoking complex, no smoking policy is observed in all common areas within
        the
        complex.<br>3.Swimming pool may be used by the authorized guests) provided they pay the corresponding fees
        (Php<br>150.00
        for REGULAR days and Php 300.00 for HOLIDAYS. Posted swimming pool rules and regulations<br>shall be strictly
        followed by all authorized guests.<br>4.Gym facilities is for the exclusive use of unit owners and tenants ONLY.
        Gym
        is off limits to guests.<br>5.No parking slot is available for guest(s).</p><h4
            style="text-align: left;transform: perspective(0px) scale(0.91);font-size: 18.704px;">GUEST HANDLING POLICY
        AND
        PROCEDURE<br></h4>

    <p style="filter: blur(0px);transform: scale(0.89);text-align: left;">1. The authorization letter form should be
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
                        <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
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
                <div id="uploadArea" class="upload-area">
                    <!-- Header -->
                    <div class="upload-area__header">
                        <h1 class="upload-area__title">Upload Your id card front</h1>
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
                        <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
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
                <div id="uploadArea" class="upload-area">
                    <!-- Header -->
                    <div class="upload-area__header">
                        <h1 class="upload-area__title">Upload Your id card back</h1>
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
                        <input type="file" id="fileInput" class="drop-zoon__file-input" accept="image/*">
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
</body>
</html>