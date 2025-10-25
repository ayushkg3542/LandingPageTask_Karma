<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; font: size 16px;">
    <h3>Thank You For Contacting with Us!</h3>
    <div class="box">We'll reach you soon...</div>

    <h5>Your Details:-</h5>

    <div style="border: 1px solid grey; border-radius: 10px; padding: 15px; margin: 15px 20px;">
        <p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
        <p><strong>Last Name:</strong> {{ $data['last_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Date of Birth:</strong> {{ $data['date_of_birth'] }}</p>
        <p><strong>Marital Status:</strong> {{ $data['marital_status'] }}</p>
        <p><strong>Package:</strong> {{ $data['package'] }}</p>
        <p>Your Message: {{ $data['message'] }}</p>
    </div>

</body>

</html>