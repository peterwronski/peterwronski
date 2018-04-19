<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <meta name="description" content="Private Dining in Aberdeen">
    <meta name="keywords" content="aberdeen, private, dining, restaurant, catering, food, parties, didier, dejean, dominique, mancellon, aberdeen, seafood, silver, darling, cafe, boheme">
    <meta name="author" content="Peter Wronski">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/header_style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../styles/body_style.css">

    <!--<link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../slidein.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Raleway:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


    <script type="text/javascript">
        $(document).on('ready', function () {
            $('.single-item').slick({
                dots: true,
                fade: true,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: false
            });
        });
    </script>

    <script>
        // handle links with @href started with '#' only
        $(document).on('click', 'a[href^="#"]', function(e) {
            // target element id
            var id = $(this).attr('href');

            // target element
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }

            // prevent standard hash navigation (avoid blinking in IE)
            e.preventDefault();

            // top position relative to the document
            var pos = $id.offset().top - 70;

            // animated top scrolling
            $('body, html').animate({scrollTop: pos});
        });
    </script>


    <title>Froggies - Private Dining by Didier and Dominique</title>
</head>

<body>

    <?php include("header.php");
     include("slideshow.php"); ?>
        <hr/>
    <?php include("ourbackground.php"); ?>
        <hr/>
    <?php include("ourwork.php") ?>
        <hr/>
    <?php include("services.php") ?>
        <hr/>
    <?php include("breakmenu.php") ?>
        <hr/>
    <?php include("contact.php") ?>

</div>






</body>
</html>