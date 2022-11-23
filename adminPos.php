<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Point of Sales</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                Admin
            </button>
            <a class="navbar-brand ms-auto" href="#">RestoName</a>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a href="#"
                    class="text-white text-decoration-none">Admin</a></h5>
            <butto type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <button type="button" class="btn btn-light mb-3">
                <h4 class="fw-normal">Point of Sales</h4>
            </button> <br>
            <button type=" button" class="btn btn-outline-none mb-3">
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

    <div class="container">
        <i class="bi bi-x-circle-fill"></i>
    </div>

</body>

</html>

<script>
document.getElementById("offcanvasExampleLabel").onclick = function() {
    window.location.replace('admin.php');
};
</script>