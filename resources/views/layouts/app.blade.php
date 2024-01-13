<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Store Management System</title>
    <style>
         /* Active/current link */
        .nav-item a.active {
        background-color: #198754 !important;
        color: white !important;
        }
        /* Nav Link Styling */
        .nav-item {
            border: 1px solid #f8f9fa;
        }
        .nav-item:hover {
            border: 1px solid #198754; 
            border-radius: 8px;
        }
        /* Sidebar and Main Content Styling */
        @media screen and (max-width: 991px) {

            /* Admin Dashboard */
            #dashboard_menu {
                height: auto;
                width: 100%;
            }

            #sidebar_menu {
                height: auto !important;
                width: 100%;
            }   

            #main_content {
                margin-top: 60px;
            }

        }

        .alert {
            /* Set initial opacity to 1 */
            opacity: 1;
            /* Apply a transition for the opacity property */
            transition: opacity 0.5s ease;
        }

        /* Define a class for hiding the alert */
        .alert-hidden {
            /* Set opacity to 0 when hidden */
            opacity: 0;
        }

    </style>
</head>
<body>

    <x-sidebar />

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>