// Design By
// - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

// Select Upload-Area
const uploadArea = document.querySelector('#uploadArea')
const uploadArea2 = document.querySelector('#uploadArea2')
const uploadArea3 = document.querySelector('#uploadArea3')

// Select Drop-Zoon Area
const dropZoon = document.querySelector('#dropZoon');
const dropZoon2 = document.querySelector('#dropZoon2');
const dropZoon3 = document.querySelector('#dropZoon3');

// Loading Text
const loadingText = document.querySelector('#loadingText');
const loadingText2 = document.querySelector('#loadingText2');
const loadingText3 = document.querySelector('#loadingText3');

// Slect File Input
const fileInput = document.querySelector('#fileInput');
const fileInput2 = document.querySelector('#fileInput2');
const fileInput3 = document.querySelector('#fileInput3');

// Select Preview Image
const previewImage = document.querySelector('#previewImage');
const previewImage2 = document.querySelector('#previewImage2');
const previewImage3 = document.querySelector('#previewImage3');

// File-Details Area
const fileDetails = document.querySelector('#fileDetails');
const fileDetails2 = document.querySelector('#fileDetails2');
const fileDetails3 = document.querySelector('#fileDetails3');

// Uploaded File
const uploadedFile = document.querySelector('#uploadedFile');
const uploadedFile3 = document.querySelector('#uploadedFile3');

// Uploaded File Info
const uploadedFileInfo = document.querySelector('#uploadedFileInfo');
const uploadedFileInfo2 = document.querySelector('#uploadedFileInfo2');
const uploadedFileInfo3 = document.querySelector('#uploadedFileInfo3');

// Uploaded File  Name
const uploadedFileName = document.querySelector('.uploaded-file__name');
const uploadedFileName2 = document.querySelector('.uploaded-file__name2');
const uploadedFileName3 = document.querySelector('.uploaded-file__name3');

// Uploaded File Icon
const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');
const uploadedFileIconText2 = document.querySelector('.uploaded-file__icon-text2');
const uploadedFileIconText3 = document.querySelector('.uploaded-file__icon-text3');

// Uploaded File Counter
const uploadedFileCounter = document.querySelector('.uploaded-file__counter');
const uploadedFileCounter2 = document.querySelector('.uploaded-file__counter2');
const uploadedFileCounter3 = document.querySelector('.uploaded-file__counter3');

// ToolTip Data
const toolTipData = document.querySelector('.upload-area__tooltip-data');
const toolTipData2 = document.querySelector('.upload-area__tooltip-data2');
const toolTipData3 = document.querySelector('.upload-area__tooltip-data3');

// Images Types
const imagesTypes = [
    "jpeg",
    "png",
    "svg",
    "gif"
];

// Append Images Types Array Inisde Tooltip Data
toolTipData.innerHTML = [...imagesTypes].join(', .');
toolTipData2.innerHTML = [...imagesTypes].join(', .');
toolTipData3.innerHTML = [...imagesTypes].join(', .');

// When (drop-zoon) has (dragover) Event
dropZoon.addEventListener('dragover', function (event) {
    // Prevent Default Behavior
    event.preventDefault();

    // Add Class (drop-zoon--over) On (drop-zoon)
    dropZoon.classList.add('drop-zoon--over');
});


// When (drop-zoon) has (dragover) Event
dropZoon2.addEventListener('dragover', function (event) {
    // Prevent Default Behavior
    event.preventDefault();

    // Add Class (drop-zoon--over) On (drop-zoon)
    dropZoon2.classList.add('drop-zoon--over');
});


// When (drop-zoon) has (dragover) Event
dropZoon3.addEventListener('dragover', function (event) {
    // Prevent Default Behavior
    event.preventDefault();

    // Add Class (drop-zoon--over) On (drop-zoon)
    dropZoon3.classList.add('drop-zoon--over');
});



// When (drop-zoon) has (dragleave) Event
dropZoon.addEventListener('dragleave', function (event) {
    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon.classList.remove('drop-zoon--over');
});


// When (drop-zoon) has (dragleave) Event
dropZoon2.addEventListener('dragleave', function (event) {
    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon2.classList.remove('drop-zoon--over');
});

// When (drop-zoon) has (dragleave) Event
dropZoon3.addEventListener('dragleave', function (event) {
    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon3.classList.remove('drop-zoon--over');
});

// When (drop-zoon) has (drop) Event
dropZoon.addEventListener('drop', function (event) {
    // Prevent Default Behavior
    event.preventDefault();

    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon.classList.remove('drop-zoon--over');

    // Select The Dropped File
    const file = event.dataTransfer.files[0];

    // Call Function uploadFile(), And Send To Her The Dropped File :)
    uploadFile(file);
});

// When (drop-zoon) has (drop) Event
dropZoon2.addEventListener('drop', function (event) {
    // Prevent Default Behavior
    event.preventDefault();

    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon2.classList.remove('drop-zoon--over');

    // Select The Dropped File
    const file = event.dataTransfer.files[0];

    // Call Function uploadFile(), And Send To Her The Dropped File :)
    uploadFile2(file);
});


// When (drop-zoon) has (drop) Event
dropZoon3.addEventListener('drop', function (event) {
    // Prevent Default Behavior
    event.preventDefault();

    // Remove Class (drop-zoon--over) from (drop-zoon)
    dropZoon3.classList.remove('drop-zoon--over');

    // Select The Dropped File
    const file = event.dataTransfer.files[0];

    // Call Function uploadFile(), And Send To Her The Dropped File :)
    uploadFile3(file);
});



// When (drop-zoon) has (click) Event
dropZoon.addEventListener('click', function (event) {
    // Click The (fileInput)
    fileInput.click();
});

// When (drop-zoon) has (click) Event
dropZoon2.addEventListener('click', function (event) {
    // Click The (fileInput)
    fileInput2.click();
});


// When (drop-zoon) has (click) Event
dropZoon3.addEventListener('click', function (event) {
    // Click The (fileInput)
    fileInput3.click();
});


// When (fileInput) has (change) Event
fileInput.addEventListener('change', function (event) {
    // Select The Chosen File
    const file = event.target.files[0];

    // Call Function uploadFile(), And Send To Her The Chosen File :)
    uploadFile(file);
});


// When (fileInput) has (change) Event
fileInput2.addEventListener('change', function (event) {
    // Select The Chosen File
    const file = event.target.files[0];

    // Call Function uploadFile(), And Send To Her The Chosen File :)
    uploadFile2(file);
});

// When (fileInput) has (change) Event
fileInput3.addEventListener('change', function (event) {
    // Select The Chosen File
    const file = event.target.files[0];

    // Call Function uploadFile(), And Send To Her The Chosen File :)
    uploadFile3(file);
});

// Upload File Function
function uploadFile(file) {
    // FileReader()
    const fileReader = new FileReader();
    // File Type
    const fileType = file.type;
    // File Size
    const fileSize = file.size;

    // If File Is Passed from the (File Validation) Function
    if (fileValidate(fileType, fileSize)) {
        // Add Class (drop-zoon--Uploaded) on (drop-zoon)
        dropZoon.classList.add('drop-zoon--Uploaded');

        // Show Loading-text
        loadingText.style.display = "block";

        // Hide Preview Image
        previewImage.style.display = 'none';

        // Remove Class (uploaded-file--open) From (uploadedFile)
        uploadedFile.classList.remove('uploaded-file--open');
        // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
        uploadedFileInfo.classList.remove('uploaded-file__info--active');

        // After File Reader Loaded
        fileReader.addEventListener('load', function () {
            // After Half Second
            setTimeout(function () {
                // Add Class (upload-area--open) On (uploadArea)
                uploadArea.classList.add('upload-area--open');

                // Hide Loading-text (please-wait) Element
                loadingText.style.display = "none";
                // Show Preview Image
                previewImage.style.display = 'block';

                // Add Class (file-details--open) On (fileDetails)
                fileDetails.classList.add('file-details--open');
                // Add Class (uploaded-file--open) On (uploadedFile)
                uploadedFile.classList.add('uploaded-file--open');
                // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                uploadedFileInfo.classList.add('uploaded-file__info--active');
            }, 500); // 0.5s

            // Add The (fileReader) Result Inside (previewImage) Source
            previewImage.setAttribute('src', fileReader.result);

            // Add File Name Inside Uploaded File Name
            uploadedFileName.innerHTML = file.name;

            // Call Function progressMove();
            progressMove();
        });

        // Read (file) As Data Url
        fileReader.readAsDataURL(file);
    } else { // Else

        this; // (this) Represent The fileValidate(fileType, fileSize) Function

    };
};

// Progress Counter Increase Function
function progressMove() {
    // Counter Start
    let counter = 0;

    // After 600ms
    setTimeout(() => {
        // Every 100ms
        let counterIncrease = setInterval(() => {
            // If (counter) is equle 100
            if (counter === 100) {
                // Stop (Counter Increase)
                clearInterval(counterIncrease);
            } else { // Else
                // plus 10 on counter
                counter = counter + 10;
                // add (counter) vlaue inisde (uploadedFileCounter)
                uploadedFileCounter.innerHTML = `${counter}%`
            }
        }, 100);
    }, 600);
};


// Simple File Validate Function
function fileValidate(fileType, fileSize) {
    // File Type Validation
    let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

    // If The Uploaded File Type Is 'jpeg'
    if (isImage[0] === 'jpeg') {
        // Add Inisde (uploadedFileIconText) The (jpg) Value
        uploadedFileIconText.innerHTML = 'jpg';
    } else { // else
        // Add Inisde (uploadedFileIconText) The Uploaded File Type
        uploadedFileIconText.innerHTML = isImage[0];
    };

    // If The Uploaded File Is An Image
    if (isImage.length !== 0) {
        // Check, If File Size Is 2MB or Less
        if (fileSize <= 2000000) { // 2MB :)
            return true;
        } else { // Else File Size
            return alert('Please Your File Should be 2 Megabytes or Less');
        };
    } else { // Else File Type
        return alert('Please make sure to upload An Image File Type');
    };
};

// :)



// 2

// Upload File Function
function uploadFile2(file) {
    // FileReader()
    const fileReader = new FileReader();
    // File Type
    const fileType = file.type;
    // File Size
    const fileSize = file.size;

    // If File Is Passed from the (File Validation) Function
    if (fileValidate2(fileType, fileSize)) {
        // Add Class (drop-zoon--Uploaded) on (drop-zoon)
        dropZoon2.classList.add('drop-zoon--Uploaded');

        // Show Loading-text
        loadingText2.style.display = "block";

        // Hide Preview Image
        previewImage2.style.display = 'none';

        // Remove Class (uploaded-file--open) From (uploadedFile)
        uploadedFile2.classList.remove('uploaded-file--open');
        // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
        uploadedFileInfo2.classList.remove('uploaded-file__info--active');

        // After File Reader Loaded
        fileReader.addEventListener('load', function () {
            // After Half Second
            setTimeout(function () {
                // Add Class (upload-area--open) On (uploadArea)
                uploadArea2.classList.add('upload-area--open');

                // Hide Loading-text (please-wait) Element
                loadingText2.style.display = "none";
                // Show Preview Image
                previewImage2.style.display = 'block';

                // Add Class (file-details--open) On (fileDetails)
                fileDetails2.classList.add('file-details--open');
                // Add Class (uploaded-file--open) On (uploadedFile)
                uploadedFile2.classList.add('uploaded-file--open');
                // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                uploadedFileInfo2.classList.add('uploaded-file__info--active');
            }, 500); // 0.5s

            // Add The (fileReader) Result Inside (previewImage) Source
            previewImage2.setAttribute('src', fileReader.result);

            // Add File Name Inside Uploaded File Name
            uploadedFileName2.innerHTML = file.name;

            // Call Function progressMove();
            progressMove2();
        });

        // Read (file) As Data Url
        fileReader.readAsDataURL(file);
    } else { // Else

        this; // (this) Represent The fileValidate(fileType, fileSize) Function

    };
};

// Progress Counter Increase Function
function progressMove2() {
    // Counter Start
    let counter = 0;

    // After 600ms
    setTimeout(() => {
        // Every 100ms
        let counterIncrease = setInterval(() => {
            // If (counter) is equle 100
            if (counter === 100) {
                // Stop (Counter Increase)
                clearInterval(counterIncrease);
            } else { // Else
                // plus 10 on counter
                counter = counter + 10;
                // add (counter) vlaue inisde (uploadedFileCounter)
                uploadedFileCounter2.innerHTML = `${counter}%`
            }
        }, 100);
    }, 600);
};


// Simple File Validate Function
function fileValidate2(fileType, fileSize) {
    // File Type Validation
    let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

    // If The Uploaded File Type Is 'jpeg'
    if (isImage[0] === 'jpeg') {
        // Add Inisde (uploadedFileIconText) The (jpg) Value
        uploadedFileIconText2.innerHTML = 'jpg';
    } else { // else
        // Add Inisde (uploadedFileIconText) The Uploaded File Type
        uploadedFileIconText2.innerHTML = isImage[0];
    };

    // If The Uploaded File Is An Image
    if (isImage.length !== 0) {
        // Check, If File Size Is 2MB or Less
        if (fileSize <= 2000000) { // 2MB :)
            return true;
        } else { // Else File Size
            return alert('Please Your File Should be 2 Megabytes or Less');
        };
    } else { // Else File Type
        return alert('Please make sure to upload An Image File Type');
    };
};

// :)

// 3

// Upload File Function
function uploadFile3(file) {
    // FileReader()
    const fileReader = new FileReader();
    // File Type
    const fileType = file.type;
    // File Size
    const fileSize = file.size;

    // If File Is Passed from the (File Validation) Function
    if (fileValidate3(fileType, fileSize)) {
        // Add Class (drop-zoon--Uploaded) on (drop-zoon)
        dropZoon3.classList.add('drop-zoon--Uploaded');

        // Show Loading-text
        loadingText3.style.display = "block";

        // Hide Preview Image
        previewImage3.style.display = 'none';

        // Remove Class (uploaded-file--open) From (uploadedFile)
        uploadedFile3.classList.remove('uploaded-file--open');
        // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
        uploadedFileInfo3.classList.remove('uploaded-file__info--active');

        // After File Reader Loaded
        fileReader.addEventListener('load', function () {
            // After Half Second
            setTimeout(function () {
                // Add Class (upload-area--open) On (uploadArea)
                uploadArea3.classList.add('upload-area--open');

                // Hide Loading-text (please-wait) Element
                loadingText3.style.display = "none";
                // Show Preview Image
                previewImage3.style.display = 'block';

                // Add Class (file-details--open) On (fileDetails)
                fileDetails3.classList.add('file-details--open');
                // Add Class (uploaded-file--open) On (uploadedFile)
                uploadedFile3.classList.add('uploaded-file--open');
                // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                uploadedFileInfo3.classList.add('uploaded-file__info--active');
            }, 500); // 0.5s

            // Add The (fileReader) Result Inside (previewImage) Source
            previewImage3.setAttribute('src', fileReader.result);

            // Add File Name Inside Uploaded File Name
            uploadedFileName3.innerHTML = file.name;

            // Call Function progressMove();
            progressMove3();
        });

        // Read (file) As Data Url
        fileReader.readAsDataURL(file);
    } else { // Else

        this; // (this) Represent The fileValidate(fileType, fileSize) Function

    };
};

// Progress Counter Increase Function
function progressMove3() {
    // Counter Start
    let counter = 0;

    // After 600ms
    setTimeout(() => {
        // Every 100ms
        let counterIncrease = setInterval(() => {
            // If (counter) is equle 100
            if (counter === 100) {
                // Stop (Counter Increase)
                clearInterval(counterIncrease);
            } else { // Else
                // plus 10 on counter
                counter = counter + 10;
                // add (counter) vlaue inisde (uploadedFileCounter)
                uploadedFileCounter3.innerHTML = `${counter}%`
            }
        }, 100);
    }, 600);
};


// Simple File Validate Function
function fileValidate3(fileType, fileSize) {
    // File Type Validation
    let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

    // If The Uploaded File Type Is 'jpeg'
    if (isImage[0] === 'jpeg') {
        // Add Inisde (uploadedFileIconText) The (jpg) Value
        uploadedFileIconText3.innerHTML = 'jpg';
    } else { // else
        // Add Inisde (uploadedFileIconText) The Uploaded File Type
        uploadedFileIconText3.innerHTML = isImage[0];
    };

    // If The Uploaded File Is An Image
    if (isImage.length !== 0) {
        // Check, If File Size Is 2MB or Less
        if (fileSize <= 2000000) { // 2MB :)
            return true;
        } else { // Else File Size
            return alert('Please Your File Should be 2 Megabytes or Less');
        };
    } else { // Else File Type
        return alert('Please make sure to upload An Image File Type');
    };
};
