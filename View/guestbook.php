<?php
if(isset($_POST['submit'])) {


    $id =12;
    $content = "qsdtqsdqjsdjqsjdjqsdjjdsj";
    $title ="test title";

    $additionalArray = array(
        'id' => $id,
        'title' => $title,
        'content' => $content
    );

//open or read json data
    $data_results = file_get_contents('guest.json');
    $tempArray = json_decode($data_results);

//append additional json to json file
    $tempArray[] = $additionalArray ;
    $jsonData = json_encode($tempArray);

    file_put_contents('guest.json', $jsonData);

}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <title>GuestBook</title>
</head>
<body>
<header>
    <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <strong>Guest Book</strong>
            </a>
        </div>
    </div>
</header>

<main role="main">




    <h1>Form</h1>
    <form name="form1" method="post" action="">
        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="Your full name" autofocus required>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="cell">Cell: </label>
            <input type="tel" name="cell" id="cell">
        </p>
        <p>
            <label for="dob">Date of birth: </label>
            <input type="date" name="dob" id="dob">
        </p>
        <p>
            <label for="study">Years of art study: </label>
            0 <input type="range" name="study" id="study" min="0" max="16"> 16
        </p>
        <p style="text-align: center;">
            <input type="submit" name="submit" id="submit" value="Submit">
        </p>
    </form>























    <div class="container">
        <form name="form1" method="post" action="">
            <div class="form-group pt-5">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" id="titleguestbook" placeholder="title">
                <label for="exampleFormControlInput1">Author Name</label>
                <input type="text" class="form-control" id="author name" placeholder="author name">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" class="form-control" id="dateguestbook" placeholder="10/08/2019>
                <label for="">Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="your comment . . ."></textarea>
                <p>
                    <a href="#" class="btn btn-primary my-2">Button 1</a>
                </p>
            </div>
        </form>
    </div>







    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        </div>
    </section>

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Guestbook example © BeCode 2019, consolidatiton challenge.</p>
        <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
</body>
</html>

