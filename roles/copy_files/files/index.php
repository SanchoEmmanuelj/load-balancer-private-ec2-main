<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        body {
            background-color: black;
        }
        #header {
            background-color: brown;
            padding: 16px;
        }


        #main-section {
        
            background-color: black;
            padding: 24px;
        }

        #section {
            background-color: rgb(58, 8, 8);
            padding: 16px;
            margin-top: 100px;
        }

        .article {
            background-color: rgb(232, 232, 238);
            padding: 16px;
            margin-top: 16px;
            margin-bottom: 16px;

        }

        #footer {
            background-color: rgb(61, 46, 46);
            padding: 24px;
            text-align: center;
            margin-top: 12%;

        }
        
     
    </style>
</head>
<body>
    
    <main id="main-section">
    <img id="image" src="data:image/png;base64,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" width="60" height="60" >

    <section id="section">
            <article class="article">
                <header>
                    <h1>This is my IP Address for This Server:</h1>
                    <h1>
                        <?php
                        
                        echo "hostname is:  " .gethostname();
                        
                        ?>
                        </h1>                        
                </header>
            </article>
        </section>
    </main>

    <footer id="footer">
        <p>Designed by: Emmanuel Jongwo Sancho</p>
    </footer>
</body>
</html>
