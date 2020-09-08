<!DOCTYPE html>
<html>

<head>
    <title>404 Page</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>404/style.css">
</head>

<body>
    <div id="container">
        <div class="content">
            <h2>403</h2>
            <h4>Access Forbidden</h4>
            <p>The page you were looking for doesn't exist. You may have mistyped the address or the page may have moved.</p>
            <a href="<?= base_url('user'); ?>">Back To Home</a>
        </div>
    </div>
    <script type="text/javascript">
        var container = document.getElementById('container');
        window.onmousemove = function(e) {
            var x = -e.clientX / 5,
                y = -e.clientY / 5;
            container.style.backgroundPositionX = x + 'px';
            container.style.backgroundPositionY = y + 'px';
        };
    </script>
</body>

</html>