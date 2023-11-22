<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>

      <style>
            p {
                  text-align: center;
            }

            h1 {
                  text-align: center;
            }

            img {
                  margin-left: 18%;
            }

            .border {
                  width: 500px;
                  height: 500px;
                  border: 2px dashed red;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  margin-left: 30%;
            }
      </style>

      <div class="border">
            <div>
                  <?php

                  $skills_string = implode(' and ',  $_POST['skills']);
                  echo '<img src="https://png.pngtree.com/element_our/20190603/ourlarge/pngtree-honored-golden-medal-illustration-image_1432303.jpg"
      alt="Your Image" style="width: 200px; height: 200px; object-fit: cover;">';

                  echo '<h1>Thx you ' . $_POST['name'] . '!!</h1>';
                  echo '<p>We received your application for the ' . $_POST['club'] . '</p>';
                  echo '<p>You are ' . $skills_string . '</p>';
                  echo '<p>You will be available on ' . $_POST['time'] . '</p>';
                  ?>
            </div>
      </div>
</body>

</html>