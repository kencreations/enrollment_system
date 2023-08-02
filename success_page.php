<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <title>Payment Success</title>
</head>

<body>
    <!-- Page content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Payment Successful!</h3>
                        <p>Your payment has been processed successfully. Thank you for your payment!</p>
                        <p>Here are the payment details:</p>
                        <ul>
                            <li><strong>Student Number:</strong> <span id="stud_number"></span></li>
                            <li><strong>Review Program:</strong> <span id="review_program"></span></li>
                            <li><strong>Down Payment:</strong> <span id="downpayment"></span></li>
                            <li><strong>OR Date:</strong> <span id="or_date"></span></li>
                            <li><strong>Amount:</strong> <span id="amount"></span></li>
                            <li><strong>PR #:</strong> <span id="pr"></span></li>
                            <li><strong>Balance:</strong> <span id="balance"></span></li>
                            <li><strong>Remarks:</strong> <span id="remarks"></span></li>
                        </ul>
                        <a href="index.php" class="btn btn-primary">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page content -->

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Function to update the payment details with session data
        function updatePaymentDetails() {
            var studNumber = sessionStorage.getItem("stud_number");
            var reviewProgram = sessionStorage.getItem("review_program");
            var downpayment = sessionStorage.getItem("downpayment");
            var orDate = sessionStorage.getItem("or_date");
            var amount = sessionStorage.getItem("amount");
            var pr = sessionStorage.getItem("pr");
            var balance = sessionStorage.getItem("balance");
            var remarks = sessionStorage.getItem("remarks");

            document.getElementById("stud_number").innerText = studNumber;
            document.getElementById("review_program").innerText = reviewProgram;
            document.getElementById("downpayment").innerText = downpayment;
            document.getElementById("or_date").innerText = orDate;
            document.getElementById("amount").innerText = amount;
            document.getElementById("pr").innerText = pr;
            document.getElementById("balance").innerText = balance;
            document.getElementById("remarks").innerText = remarks;
        }

        // Call the function to update the payment details when the page loads
        window.onload = function() {
            updatePaymentDetails();
        };
    </script>
</body>

</html>
