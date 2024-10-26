<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Documents</title>
    <?php require_once 'partials/head.php' ?>
</head>

<body>
    <?php require_once 'partials/navbar.php' ?>
    <h1 class="tw-font-bold tw-text-2xl tw-text-center tw-my-8">Our Legal Documents</h1>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }

        .grid-item {
            background-color: #f2f2f2;
            padding: 20px;
            border: 1px solid #999;
        }

        .grid-item img {
            width: 100%;
        }
    </style>
    <div class="container text-c">
        <div class="flex tw-w-full tw-justify-center"><img src="img/documents/qr_code.jpg" alt=""></div>

        <hr style="border: 1px solid black; margin: 20px 0">
        <style>
            .grid-item {
                background-color: white;
                padding: 50px;
                border: 1px solid #999;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                font-size: 1.2rem;
                border-radius: 10px;
            }
        </style>
        <div class="tw-flex justify-content-between tw-items-center">
            <h1 class="tw-text-2xl tw-font-bold">Bank Account Transfer</h1>
            <img src="img/documents/hdfc.png" alt="">
        </div>
        <div class="grid-container tw-mb-32 tw-mt-10">
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">Bank Accout Name</h4>
                <p class="tw-text-center">BIOALEXIS TRADING INDIA PVT LTD</p>
            </div>
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">Account Number</h4>
                <p class="tw-text-center">50200063635707</p>
            </div>
            <div class="grid-item">
                <h4 class="tw-text-center tw-font-bold tw-mb-4">IFSC Code</h4>
                <p class="tw-text-center">HDFC0000769</p>
            </div>
        </div>

    </div>
    <?php require_once 'partials/scripts.php' ?>
    <?php require_once 'partials/footer.php' ?>
</body>

</html>