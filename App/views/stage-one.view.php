<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Images Uploader (Drag &amp; browse) </title>

    <link class="js-stylesheet" href="css/light.css" rel="stylesheet">
    <link class="js-stylesheet" href="css/app.css" rel="stylesheet">
    <link class="js-stylesheet" href="css/boxicon.min.css" rel="stylesheet">

</head>

<body translate="no">
    <!-- Upload Area -->
    <div id="uploadArea" class="upload-area">
        <!-- Header -->
        <div class="upload-area__header">
            <h1 class="upload-area__title">Upload your file</h1>
            <p class="upload-area__paragraph">
                Supported
                <strong class="upload-area__tooltip">
                    formats
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
            <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
            <input type="file" id="fileInput" class="drop-zoon__file-input">
        </div>
        <!-- End Drop Zoon -->

        <!-- File Details -->
        <div id="fileDetails" class="upload-area__file-details file-details">
            <h3 class="file-details__title">Uploaded File</h3>

            <div id="uploadedFile" class="uploaded-file">
                <div class="uploaded-file__icon-container">
                    <i class='bx bxs-file-blank uploaded-file__icon'></i>
                    <span class="uploaded-file__icon-text"></span>
                </div>

                <div id="uploadedFileInfo" class="uploaded-file__info">
                    <span class="uploaded-file__name"></span>
                    <span class="uploaded-file__counter"></span>
                </div>
            </div>
        </div>
        <!-- End File Details -->
    </div>
    <div class="d-grid gap-2 mt-3" style="width: 20%;">
        <button class="btn btn-lg btn-primary mt-5" type="submit">Upload</button>
    </div>
    <!-- End Upload Area -->

    <script src="js/main.js">

    </script>


</body>

</html>