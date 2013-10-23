<!DOCTYPE html>
<html>
    <head>
        <title>Delta Systems Dev Environment Checklist</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
        <div class="header">
            <h1>Delta Systems Dev Environment Checklist</h1>

            <p>
                This tool will test your development environment to ensure it is suitable
                for working on Delta Systems projects.
            </p>
        </div>

        <ol>
            <?php
            foreach ($results as $result) {
                echo $result->render();
            }
            ?>
        </ol>
    </body>
</html>
