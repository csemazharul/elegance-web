<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email</title>
</head>

<body>
  <div>
    <P>Name : <?php if (isset($data['name'])) echo  $data['name']; ?>
    </p>
    <P>Email :<?php if (isset($data['email'])) echo  $data['email']; ?>
    </p>
    <P>Selected Prdouct :<?php if (isset($data['product'])) echo  $data['product']; ?>
    </p>
    <P>Phone :<?php if (isset($data['phone'])) echo  $data['phone']; ?>
    </p>
    <P>Message :<?php if (isset($data['message'])) echo  $data['message']; ?>
    </p>
  </div>
</body>

</html>