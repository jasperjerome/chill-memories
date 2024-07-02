<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        .table-2 th, .table-2 td {
            border: 2px solid #000;
            padding: 10px 20px;
        }
        .inner-table tr{
            padding: 4px 0;
            display: block;
        }
        .inner-table td{
            padding: 0 30px;
        }
    </style>
</head>

<body style="font-family: 'Poppins', sans-serif; display: flex;justify-content: center;">
    <div>
        <table style="box-shadow:12px 13px 30px #e1e1e1;border-radius:30px;">
            <tr>
                <td style="background-color: #ff6a00;color:#fff;border-right:4px dashed #000;border-radius: 30px 0px 0px 30px;padding:0 40px;">
                    <div style="display: flex;justify-content:center;">
                        <img src="{{asset('assets/img/chill-memories-logo.jpeg')}}" style="height:70px;" alt="">
                    </div>
                    <h1>Welcome Client Name</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus<br/>
                    vel rem, nobis repudiandae cupiditate ex necessitatibus? Quod,<br/>
                    ipsam harum. Non odit consequatur officia sunt, blanditiis accusantium<br/>
                    animi adipisci autem saepe!</p>
                    <table>
                        <tr style="">
                            <td style="width: 75%;"><h5>Destination Name</h5></td>
                            <td style="width: 20%;"><h5>Package Name</h5></td>
                        </tr>
                    </table>
                </td>
                <td style="padding: 0 28px;">
                    <h3 style="text-align: center;letter-spacing:2px;">Travel Pass</h3>
                    <table class="inner-table">
                        <tr>
                            <td>FROM<br/><span style="font-size: 14px; color:#ff6a00;">01-01-2024</span></td>
                            <td>TO<br/><span style="font-size: 14px; color:#ff6a00;">05-01-2024</span></td>
                        </tr>
                        <tr>
                            <td>No Of Pax<br/><span style="font-size: 14px; color:#ff6a00;">03 Adults</span></td>
                            <td><span style="opacity: 0;">No Of Pax</span><br/><span style="font-size: 14px; color:#ff6a00;">02 Children</span></td>
                        </tr>
                        <tr>
                            <td colspan="2">Booking Date<br/><span style="font-size: 13px; color:#ff6a00;">01-01-2024</span></td>
                        </tr>
                        <tr>
                            <td colspan="2">Transaction Id<br/><span style="font-size: 13px; color:#ff6a00;">pay_OS8QfvZsisZVVc</span></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br/>
        <br/>
        <br/>
        <table class="table-2" style="border: 2px solid #000; border-collapse:collapse; width:100%;">
            {{-- <tr>
                <td>Booking Details</td>
            </tr> --}}
            <tr>
                <td>Number Of Pax</td>
                <td colspan="2">04 Adults - 2 Rooms</td>
            </tr>
            <tr>
                <td>Tour Duration</td>
                <td colspan="2">3 Nights 4 Days</td>
            </tr>
            <tr>
                <td>Hotel in Munnar 2 N</td>
                <td>Breeze Resort Munnar</td>
                <td>With Breakfast</td>
            </tr>
            <tr>
                <td>Hotel in Alleppey 1 N</td>
                <td>2 Bed room Private Houseboat</td>
                <td>With Breakfast lunch & dinner + Hm kit</td>
            </tr>
            <tr>
                <td>Cab</td>
                <td>Etios / Similar sedan car</td>
                <td>AC</td>
            </tr>
            <tr>
                <td>Pickup from</td>
                <td>Ernakulam Railway station / bus stand / airport </td>
                <td>Time – 10.00 Am ( Approx )</td>
            </tr>
            <tr>
                <td>Drop to</td>
                <td>Cochin Railway station / bus stand / airport</td>
                <td>Time – 05.00 pm ( Approx )</td>
            </tr>
        </table>
    </div>
</body>

</html>
