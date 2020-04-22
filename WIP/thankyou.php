<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Submitted</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style media="screen">
        body {
          font-family: Times;
          font-size: 32px;

        }


      a.back {
        font-size: 0.65em;
        width: 70px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        background-color: white;
        position: absolute;
        left: 8%;
        bottom: 8%;
        z-index: 99;
        transition: width 1.5s ease-in-out;
      }

      a.back:hover {
        width: 200px;
      }

      .back a{
        font-style: normal;
        width: max-content;
        font-size: 0.65em;
      }

      .caption {
        font-size: 0.65em;
      }

      p,a {
        text-align: center;
        font-style: normal;
        text-decoration: none;
        color: inherit;
      }

    </style>
  </head>
  <body>
    <?php
      $word = $_POST['word'];
      $email = $_POST['email'];
      $data = [$word, $email,"\n"];

      $file = fopen("form.csv","a");
      fputcsv($file,$data);
      fclose($file);
      // echo "<p>Thank you for your contribution </p>";
    ?>
      <p>
        <a class="caption" href="index.php">  Thank you so much for the help. <br>
        I will come back to you as soon as your packet is ready.</a><br><br>
        <a class="caption" href = "mailto: mianwei.wang@yale.edu">@aukewor</a>
      </p>

      <!-- this is back tag -->
            <a class="back" href="index.php">Back to the beginning</a>


  </body>
</html>
