<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Upload Original Case File </title>

    <link class="js-stylesheet" href="../../../ib-fyp/css/light.css" rel="stylesheet">
    <link class="js-stylesheet" href="../../../ib-fyp/css/app.css" rel="stylesheet">
    <link class="js-stylesheet" href="../../../ib-fyp/css/boxicon.min.css" rel="stylesheet">

</head>

<body translate="no">
    <!-- Upload Area -->
    <div id="uploadArea" class="upload-area">
        <!-- Header -->
        <div class="upload-area__header">
            <h1 class="upload-area__title">Upload Original File</h1>
            <p class="upload-area__paragraph">
                Supported
                <strong class="upload-area__tooltip">
                    formats
                    <span class="upload-area__tooltip-data"></span>
                </strong>
            </p>
        </div>
        <!-- End Header -->

        <!-- Drop Zoon -->
        <form method="POST" action="http://localhost/ib-fyp/dashboard/submit/original-file" enctype="multipart/form-data">
            <div id="dropZoon" class="upload-area__drop-zoon drop-zoon mt-10">
                <span class="drop-zoon__icon">
                    <i class='bx bxs-file-blank'></i>
                </span>
                <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                <input type="file" name="original_file" id="fileInput" class="drop-zoon__file-input" required>
                <!-- <input type="file" name="original_file" class="drop-zoon__file-input"> -->
                <!-- <input type="file" name="original_file" class=""> -->

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

    </div>
    <div class="row" style="width: 70%;">
        <div class="col-xl-12 col-xxl-12 d-flex">
            <div class="w-100">
                <div class="row" >
                    <div class="col-sm-6" >
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-1">Case File Name</h5>
                                <input type="text" class="form-control" name="case_file_name" placeholder="Enter Case File Name" required>
                                <div class="mt-3">
                                    <h5 class="card-title mb-1">Investigator's Name</h5>
                                    <input type="text" class="form-control" name="investigator_name" placeholder="Enter Investigator's Name" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-grid gap-2 mt-3">

                            <button class="btn btn-lg btn-primary mt-2" type="submit">Upload to database</button>

                            <a href="http://localhost/ib-fyp/dashboard" class="btn btn-lg btn-primary mt-3 mb-3" type="submit">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- End Upload Area -->

    <script src="../../../ib-fyp/js/main.js">

    </script>


</body>

</html>