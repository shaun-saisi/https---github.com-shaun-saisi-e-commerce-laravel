<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="body">
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    
    .custom-login{
        height: 500px;
        padding-top:10px;
    }
    img.slider-img{
        box-sizing: border-box;
        width: 66%;
        height: 200px;
        margin-right: 10px;
        background: #8C8;
        height: 100px;
     
    }
    .trending-wrapper{
        font-family: 'Lucida Sans', 
    }
    .navbar-brand{
        font-size: 5ex;
        font-style: italic;
        font-family:  Courier, monospace
    }
    .carousel-inner{
        width: 100%;
        height: 300px;
        margin-right: 10px;
        padding: 5%
        padding-bottom: 12%;
        
    }
    .custom-login{
    background-attachment:fixed ;
    background-repeat: no-repeat;
    background-size: cover;
    }
    .custom-product{
        height: 85%;
    }
    

    }
    .slider-text{
        color: #35443585;
        
    }
    .trending-image{
        height: 200px;
        margin: 5%
    }
    .trending-item{
        float: left;
        width: 33.3%;
    }
    .trending-wrapper{
        margin: 70px;
        font-family:open sans-serif;
        
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .footer-copyright {
        margin-top: 5%
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
    .navbar {
        background-color:lavender
    }
.container {
    margin-left:25%;
}
.body{
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}
</style>
<script>
    $document.ready(function()
    {
        $("button").click(function()
        {
            alert("all set")
        })
    })
</script>
</html>