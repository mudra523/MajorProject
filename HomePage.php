<?php
include('Helper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script async src="//jsfiddle.net/bootstrapious/ko18ravd/embed/"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">

    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
        <img src="ldrp.jpg" alt="..." width="65" class="img-fluid mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">LDRP-ITR</h4>
                <!-- <p class="font-weight-light text-muted mb-0">Institute of technology and resuerch</p> -->
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">ALL CIRCULARS</p>
    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light " type="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam TimeTable
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Exam Time Table') ?>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light " type="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam Syllabus
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Exam Syllabus') ?>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light " type="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam Seat Number
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Exam Seat Number') ?>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Question Paper
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Quetion Paper') ?>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Result
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Result') ?>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light ajax-call" type="button" data-category="Activity"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Activity
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Activity') ?>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light ajax-call" type="button" data-category="Event"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Event
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Event') ?>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <div class="dropdown dropright">
                <a class="nav-link text-dark font-italic bg-light ajax-call" type="button" data-category="Notice"
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Notice
                </a>
                <div class="dropdown-menu dropdown-primary">
                    <?php Helper::generateLinkFromCategory('Notice') ?>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content p-5 bgroudcolor" id="content">
    <!-- Toggle button -->
    <script>
        $(function () {
            // Sidebar toggle behavior
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
            });


            $.post("HomeData.php",
                function (data, status) {
                    $('#demo').html(data)
                });

            $('.ajax-call').on('click', function () {
                let semester = $(this).data('value');
                let category = $(this).data('category');

                $.post("HomeData.php",
                    {semester, category},
                    function (data, status) {
                        $('#demo').html(data)
                    });
            })
        });


    </script>

    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
        <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">circular</small></button>

    <!-- Demo content -->
    <h2 class="display-4 text-white"></h2>
    <!-- <p class="lead text-white mb-0">Here are the circulars and notice </p> -->
    <!-- <div class="separator"></div> -->
    <div class="row text-white">
        <div class="col-lg-12 ">
            <div class="container-fluid shadow">
                <div class="m-3" id="demo">

                </div>
            </div>
        </div>
    </div>
    <!-- End demo content -->

</div>

</body>
</html>
