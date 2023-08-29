<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Declined</title>
</head>
<body>
    <h1>Appointment Request Declined</h1>
    <p>Dear {{ $appointment->first_name }},</p>
    <p>We regret to inform you that your appointment request has been declined.</p>
    <p>Date: {{ $appointment->appointment_date }}</p>
    <p>Time: {{ $appointment->time_slot }}</p>
    <p>If you have any questions or concerns, please feel free to contact us.</p>
    <p>Thank you for considering our services.</p>
    <p>Sincerely,</p>
    <p>The Counseling Team</p>
    
</body>
</html>