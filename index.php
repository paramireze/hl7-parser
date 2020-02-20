<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HL7 Parser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/custom.min.css">
</head>
<body>
    <div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <div class="container">
            <a href="../" class="navbar-brand">HL 7 Parsers</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                </ul>
            </div>

        </div>

    </div>
    <div class="container">

        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-6">
                    <h1>Paste your HL7 Here</h1>
                    <p class="lead">Watch and Observe</p>
                    <div class="form-group">
                        <textarea class="form-control" id="textAreaHL7" rows="3" spellcheck="false"></textarea>
                    </div>
                    <button id="hl7btn" type="button" class="btn btn-primary btn-lg btn-block">Parse me</button>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="sponsor">
                        <a href="https://github.com/paramireze/algos"><img src="images/Octocat.jpg"></a>
                    </div>
                </div>
            </div>
        </div>

    <h1></h1>

    <table id="content" class="table"></table>
    <script type="text/javascript" src="js/hl7.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="js/hl7.js"></script>
    <script>
        $('#hl7btn').click(function() {
            var hl7 = $('#textAreaHL7').val();
            parseHL7(hl7, '#content')
        });

        // Example for making the headers interactive
        $('#content').on('click', 'tr.header', function (e) {
            $(this).nextUntil('tr.header').css('display', function(i,v) {
                return this.style.display === 'none' ? 'table-row' : 'none';
            });
        });
    </script>
</body>
</html>