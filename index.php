<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#date").load('time2.php');
                $("#time").load('time.php');
                $("#secon").load('secon.php');
                $("#zona").load('time3.php');
            }, 1000);
        });
    </script>
    <style>
        body {
            background: #000;
            align-content: center;
        }

        #date {
            color: aqua;
            font-family: Orbitron, Arial, Helvetica, sans-serif;
            margin-left: 75px;
            font-size: 700%;
            letter-spacing: 7px;
            font-weight: bold;
        }

        #time {
            width: 55%;
            font-family: Orbitron, Arial, Helvetica, sans-serif;
            font-size: 1700%;
            font-weight: bold;
            margin-left: 75px;
            color: wheat;
            letter-spacing: 7px;
        }

        #secon {
            color: white;
            font-family: Orbitron, Arial, Helvetica, sans-serif;
            font-size: 800%;
            letter-spacing: 7px;
            font-weight: bold;
        }

        #zona {
            color: white;
            font-family: Orbitron, Arial, Helvetica, sans-serif;
            margin-left: 75px;
            font-size: 700%;
            letter-spacing: 7px;
            font-weight: bold;
        }

        #frame {
            margin-top: 125px;
        }
    </style>
</head>

<body>
    <div id="frame">
        <div id="date"></div>
        <table>
            <tr>
                <th>
                    <div id="time"></div>
                </th>
                <th>
                    <div id="secon" style="padding-top: 100px;"></div>
                </th>
            </tr>
        </table>

        <div id="zona"></div>

    </div>
</body>

</html>