<!doctype html>
<html lang="en">
<?php require_once(__DIR__ . "/lib/helpers.php");
if (is_logged_in()) {
    header("Location: home.php");
}
?>

<head>
    <title>Welcome</title>
    <meta name="description" content="test">
    <meta name=" viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <?php require_once(__DIR__ . "/partials/nav.php"); ?>
    <div class="container">
        <h1>Homepage</h1>
        <p>To be the best, you will have to beat the best!
            Join the competitive environment of quizzes where players get to challenge the world leaderboard. Show off your glory by showcasing your achievement through hard-earned badges. Not in a competitive mood. No problem, users can create trivia and play with their family and friends. Join our wonderful Trivia community for the sake of glory and entertainment by logging in with your email. New to the platform, no problem, sign up today to join the community:</p>
        <button type="button" href="login.php">Login</button>
        <button type="button" href="register.php">Register Here</button>

    </div>
    <?php include_once(__DIR__ . "/partials/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>