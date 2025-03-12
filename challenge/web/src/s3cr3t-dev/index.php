<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding-top: 20px;
        }
        .notes-container {
            width: 90%;
            max-width: 600px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .notes-header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-decoration: underline;
        }
        .notes-content {
            font-size: 16px;
            line-height: 1.5;
        }
        .upload-container {
            width: 90%;
            max-width: 600px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="notes-container">
        <div class="notes-header">Note:</div>
        <div class="notes-content">
            Hey Alex,<br>
            Please remove this dev from our site. If someone finds this uploads entry, it will make a big backfire to us!<br>
            And one more <b>tips</b> to you alex !!<br>
            You should see deeper to get your solution.
            <!-- You made it here !! -->
            <!-- alex don't forget to remove /uploads folder too !!-->
        </div>
    </div>
    <div class="upload-container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>