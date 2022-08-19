<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <meta name="google-site-verification" content="xFJETNcqOJ0L584oerFzEpjUomAS9RzF_WUNF1ITfuQ" />
    <link rel="stylesheet"
        href="etc.clientlibs/airforce/clientlibs/clientlib-site.min.0fc6d32eb5cfceb4182cf7154eae0680.css"
        type="text/css">
    <link rel="icon" sizes="48x48" href="content/dam/airforce/en/images/header-navigation/favicon.png" />
    <title>radleyreclaim - Private Investigation and Funds / Assets Recovery</title>
</head>

<body>

    <div class="container mt-5">
        <a href="#" type="button" class="btn btn-primary btn-lg">Logout</a>

        <div class="row">
            <?php
            if (file_exists('reclaims.json')) {
                $current_data = file_get_contents('reclaims.json');
                $reclaims = json_decode($current_data, true);

                foreach ($reclaims as $reclaim) {
                    echo "<div class=\"col-md-4\"><div class=\"card\" style=\"width: 30rem; margin-top: 30px\">
                <div class=\"card-body\"  style=\"font-size: 16px;\>
                    <h5 class=\"card-title\">" . $reclaim['message'] . "</h5>

                </div>
                <ul class=\"list-group list-group-flush\" style=\"font-size: 14px;\">
                    <li class=\"list-group-item\">Name:  " . $reclaim['name'] . "</li>
                    <li class=\"list-group-item\">Phone Number: " . $reclaim['phone'] . "</li>
                    <li class=\"list-group-item\">Email Address: " . $reclaim['email'] . "</li>
                    <li class=\"list-group-item\">Amount lost: " . $reclaim['amount'] . "</li>
                    <li class=\"list-group-item\">Country Of Resident: " . $reclaim['location'] . "</li>
                </ul>

            </div></div>";
                }
            }
            ?>

        </div>

    </div>


    <ol class="list js-event-list mt-5"></ol>
    <footer class="grid">
        <div class="col col-l-push-1 col-l-11">
            <a href="index.php">
                <div data-component="icon-button" class="icon-button js-load-more" data-scroll-component="">
                    <button class="button-element has-label  " type="button">
                        <div class="icon-wrapper">
                            <svg viewBox="0 0 34 34">
                                <circle class="outline" r="16" cx="17" cy="17" vector-effect="non-scaling-stroke">
                                </circle>
                            </svg>

                            <span class="icon  " data-component="icon" data-icon="plus"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                                    <path
                                        d="M8 6a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v4a1 1 0 0 0 1 1zM8 10a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1zM15 7H1a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2z">
                                    </path>
                                </svg></span>
                        </div>
                        <span class="heading-06 button-label">Back to Home Page</span>
                    </button>
                </div>
            </a>
        </div>
    </footer>


    <script type="module" src="./index.js"></script>
</body>

</html>