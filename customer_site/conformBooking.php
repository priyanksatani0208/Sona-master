<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Booking Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif;">

  <h2>Hotel Booking Confirmation</h2>

  <p>Dear <?php echo $_SESSION['cust_name'] ?>,</p>

  <p>Thank you for choosing our hotel! Your booking details are as follows:</p>

  <ul>
    <li><strong>Name:</strong> <?php echo $_SESSION['cust_name'] ?></li>
    <li><strong>Phone Number:</strong> <?php echo $_SESSION['cust_mob'] ?></li>
    <li><strong>Total Rooms:</strong> <?php echo $rooms ?></li>
    <li><strong>Check-In Date:</strong> <?php echo $check_in ?></li>
    <li><strong>Check-Out Date:</strong> <?php echo $check_out ?></li>
    <li><strong>Total Amount:</strong> <?php echo $total_amount ?></li>
  </ul>

  <p>Please review the details above. If everything looks correct, you can confirm your booking by clicking the button below:</p>

  <p><a href="localhost/sona-master/customer_site/conform-Booking?id=<?php echo $uuid ?>" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Confirm Booking</a></p>

  <p>If you have any questions or need assistance, please feel free to contact us. We look forward to welcoming you to our hotel!</p>

  <p>Best regards,<br> Sona Master</p>

  <p>© 2023-2024 Hotels. All rights reserved | Designed by Divya savan priyank </p>
</body>

</html>
