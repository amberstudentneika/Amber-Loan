<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<>

<p>Dear {{$emailContent['name']}},</p>
<p>Thank you for applying to Amber loans. We have received your loan application and have scheduled
    a meeting for you on the <b>{{$emailContent['date']}}</b> at <b>{{date('h:i A',strtotime($emailContent['time']))}}</b>.
    If you are unable to attend, please provide us with a call at 876-234-4477.
    Thank you.
</p>
<br/>
<p>Best Regards,</p>
<p><b>{{$emailContent['loanOfficer']}}</b></p>
<p><i>Loan Officer</i></p>
<p>Amber Loans</p>
<p>2021 Awesome Street</p>
<p>Kingston 7</p>

</body>
</html>
