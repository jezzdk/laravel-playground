<html>
    <head>
        <meta http-equiv="refresh" content="<?php echo $delay;?>;url=<?php echo $intended;?>" />
        <style>
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                background-color: black;
            }
            body > div {
                position: fixed;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div>
            <img src="data:image/jpeg;base64,<?php echo $source;?>">
        </div>
    </body>
</html>