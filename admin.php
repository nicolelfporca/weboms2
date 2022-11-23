<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body style="background: url(https://eu-assets.simpleview-europe.com/svalbard/imageresizer/?image=%2Fdmsimgs%2FVinterhagen_6__895889787.jpg&action=ProductDetailProFullWidth) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;">

    <div class="container text-center"
        style="margin:0; position:absolute; top:40%; left:50%; transform:translate(-50%, -50%);">
        <h1 class="h1Admin text-white mt-5 mb-4">Welcome Admin!</h1>
        <button class="btn btn-lg btn-outline-light col-12" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            Admin
        </button>
    </div>

    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <button type="button" class="btn btn-outline-none mb-3" id="pos">
                <h4 class="fw-normal text-white">Point of Sales</h4>
            </button> <br>
            <button type="button" class="btn btn-outline-none mb-3">
                <h4 class="fw-normal text-white">Orders</h4>
            </button> <br>
            <button type="button" class="btn btn-outline-none mb-3">
                <h4 class="fw-normal text-white">Orders Queue</h4>
            </button> <br>
            <button type="button" class="btn btn-outline-none mb-3">
                <h4 class="fw-normal text-white">Inventory</h4>
            </button> <br>
            <button type="button" class="btn btn-outline-none mb-3">
                <h4 class="fw-normal text-white">Sales Report</h4>
            </button> <br>
            <button type="button" class="btn btn-outline-none mb-3">
                <h4 class="fw-normal text-white">Logout</h4>
            </button> <br>
        </div>
    </div>

</body>

</html>

<script>
document.getElementById("pos").onclick = function() {
    window.location.replace('adminPos.php');
};
</script>