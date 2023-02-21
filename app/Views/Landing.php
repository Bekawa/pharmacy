<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />

    <style>
        code {
            font-family: Monaco, monospace;
            line-height: 100%;
            background-color: #2d2d2c;
            padding: 0.1em 0.4em;
            letter-spacing: -0.05em;
            word-break: normal;
            border-radius: 7px;
            color: white;
            font-weight: normal;
            font-size: 1.75rem;
            position: relative;
            top: -2px;
        }

        .scene1,
        .scene2,
        .scene3 {
            min-height: 100vh;
        }

        .content .logo {
            font-size: xx-large;
            max-width: 199px;
            z-index: 999;
        }

        .graphic img {
            position: fixed;
            height: 80vh;
            margin-top: 80px;
        }

        .download-scene {
            opacity: 0;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            align-self: center;
            text-align: center;
            position: absolute;
        }

        .content .logo {
            max-width: 200px;
            z-index: 999;
        }

        .invert-logo .logo {
            transition: all 1750ms ease;
        }

        .form-control:focus {
            color: #495057;
            background-color: transparent;
            border-color: transparent;
            outline: none;
            box-shadow: none;
            border-bottom: 1px solid #12263f;
        }

        .btn-blue {
            background: #1a41e1;
            font-size: 16px;
            border: none;
            color: #fff;
        }

        .btn-blue:hover {
            background: #132fa2;
            font-size: 16px;
            border: none;
            color: #fff;
        }

        form {
            width: 100%;
        }

        .form-control-lg {
            border: 0;
            border-radius: 0;
            border-bottom: 1px solid #12263f;
            padding-left: 0;
            width: 100%;
            font-size: 18px;
            text-align: center;
            background: transparent;
        }
    </style>


</head>

<body>
    <section class="scene1 d-flex container-fluid m-0 p-0">
        <div class="half content col-lg-6 d-flex justify-content-center align-items-center flex-column">
            <div class="col-lg-8 col-xl-9 d-flex flex-column align-items-start justify-content-center">
                <div class="logo mb-3"><code>&lt;Pharmacy&gt;</code></div>
                <h1 class="scene">Yohana Pharmacy Management System.</h2>
                    <p class="mb-3 scene">Click below to get a copy of our latest case study of how FiveBelow utilizing Greenfly has been a gamechanger. And this only the beginning.</p>
                    <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign in</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Check out Available Drug</button>
                    </div>
            </div>
        </div>
        <div class="half graphic col-lg-6 d-flex justify-content-center">
            <img data-tilt data-tilt-perspective="300" data-tilt-speed="800" data-tilt-max="5" class="screens" src="<?php echo base_url(); ?>assets/image/Download_Medical_caduceus_symbol_design_illustration_vector_eps.png" alt="" />
        </div>
    </section>
</body>

</html>