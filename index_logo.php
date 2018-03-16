<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Videojs-logo-overlay Test</title>
    <meta name="description" content="" />
    <meta name="author" content="marufactory" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="http://vjs.zencdn.net/5.8.8/video-js.css" rel="stylesheet">
    <link href="css/videojs-logo-overlay.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/materialize.min.css">  -->
    <script src="js/jquery.js"></script>
    <script src="http://vjs.zencdn.net/5.8.8/video.js"></script>
    <script src="js/videojs-logo-overlay.js"></script>
    <script src="js/materialize.min.js"></script>
    
    <!--[if lt IE 9]>
        <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <![endif]-->
</head>

<body>
    <select>
<option>kulm sunset</option>
<option>kulm sunset</option>
<option>kulm sunset</option>
<option>kulm sunset</option>
</select>

    <br><br>
    <form method="post" enctype="multipart/form-data" id="UploadMedia">
        <div class="container-fluid">
            <div class="row">
                <div class="col s6 push-s3">
                    <div class="card card-panel hoverable">
                        <div class="card-image">
                            <!-- <img src="image/images.png" class="img-responsive" id="previewImage"> -->
                            <img class="img-responsive" id="previewImage">
                            <span class="card-title">Image Show Here</span>
                        </div>
                        <div class="card-content">
                            <div class="file-field input-field">
                                <div class="btn" style="background-color:#757575">
                                    <span>File</span>
                                    <input type="file" name="file" id="file" multiple>
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br><br> select position:
    <select id="logo-pos">
    <option value="TR">Top Right</option>
    <option value="TL">Top Left</option>
    <option value="BR">Bottom Right</option>
    <option value="BL">Bottom Left</option>
</select>
    <br><br> offset X-position: <input type="text" id="xpos">
    <br> offset Y-position:
    <input type="text" id="ypos">
    <br><br>
    <div id="video-tag">

    </div>

    <button id="logo-test">Logo video test</button>
    <script src="js/script_logo.js"></script>
    <!-- <script src="js/script_logo.js"></script> -->
</body>

</html>