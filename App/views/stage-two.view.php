<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Images Uploader (Drag &amp; browse) </title>

    <link class="js-stylesheet" href="../../../ib-fyp/css/light.css" rel="stylesheet">
    <link class="js-stylesheet" href="../../../ib-fyp/css/boxicon.min.css" rel="stylesheet">
    <link class="js-stylesheet" href="../../../ib-fyp/css/app.css" rel="stylesheet">
    <style>
        :root {
            --prm-color: #0381ff;
            --prm-gray: #b1b1b1;
        }

        /*  unnecessary */
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-direction: column;
        }

        section {
            width: 100%;
        }

        /*  unnecessary finished*/

        /* CSS */
        .steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            position: relative;
        }

        .step-button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            background-color: var(--prm-gray);
            transition: .4s;
        }

        .step-button[aria-expanded="true"] {
            width: 60px;
            height: 60px;
            background-color: var(--prm-color);
            color: #fff;
        }

        .done {
            background-color: var(--prm-color);
            color: #fff;
        }

        .step-item {
            z-index: 10;
            text-align: center;
        }

        #progress {
            -webkit-appearance: none;
            position: absolute;
            width: 95%;
            z-index: 5;
            height: 10px;
            margin-left: 18px;
            margin-bottom: 18px;
        }

        /* to customize progress bar */
        #progress::-webkit-progress-value {
            background-color: var(--prm-color);
            transition: .5s ease;
        }

        #progress::-webkit-progress-bar {
            background-color: var(--prm-gray);

        }

        a {
            background-color: #ffff0047;
        }
    </style>

</head>

<body translate="no">
    <section>
        <div class="container mt-4">
            <div class="accordion" id="accordionExample">
                <div class="steps">
                    <progress id="progress" value=50 max=100></progress>
                    <div class="step-item">
                        <button class="step-button text-center collapsed done" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1
                        </button>
                        <div class="step-title">
                            Stage One
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed done" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2
                        </button>
                        <div class="step-title">
                            Stage Two
                        </div>
                    </div>
                    <div class="step-item">
                        <button class="step-button text-center collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            3
                        </button>
                        <div class="step-title">
                            Stage Three
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        <form method="POST" action="http://localhost/ib-fyp/dashboard/analysis/stage-two" enctype="multipart/form-data">
        <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
            <span class="drop-zoon__icon">
                <i class='bx bxs-file'></i>
            </span>
            <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
            <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
            <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
            <input type="file" id="fileInput" class="drop-zoon__file-input" name="stage_two_file">
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
    <div class="d-grid gap-2 mb-3" style="width: 20%;">
        <button class="btn btn-lg btn-primary mt-5" type="submit">Upload</button>
    </div>
    </form>
    <!-- End Upload Area -->

    <script src="../../../ib-fyp/js/main.js">

    </script>


</body>

</html>