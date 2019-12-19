<?php
include('database.php');
include('server.php');
include('admin_add_item.php');

/* Restricting the user to open page without signing in */
if (!isset($_SESSION['id'])) {
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome Admin</title>

    <!--title bar icons-->
    <link href="images/image1.jpg" rel="icon">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
        .counter {
            float: right;
            font-weight: bold;
        }

        .breadcrums {
            cursor: pointer;
        }

        h4 {
            font: 400 100px/1.5 'Pacifico', Helvetica, sans-serif;
            color: #2b2b2b;
            text-shadow: 3px 3px 0px rgba(0, 0, 0, 0.1), 7px 7px 0px rgba(0, 0, 0, 0.05);
            font-size: 24px;
            text-align: center;
        }

        .delete {
            color: #F44336;
        }

        .row {
            margin-bottom: 0px;
        }

        .footer-copyright {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .brand-logo {
            font: 400 100px/1.5 'Pacifico', Helvetica, sans-serif;
            text-shadow: 3px 3px 0px rgba(0, 0, 0, 0.1), 7px 7px 0px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>
    <ul id="admin_drop" class="dropdown-content">
        <li><a href="orders_list.php">View Orders</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav style="background-color: #F44336;">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo white-text" style="padding-left: 20px; padding-top: 10px;">DF</a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="dropdown-trigger white-text" href="#!" data-target="admin_drop"><?= $_SESSION['username']; ?><i class="material-icons right">arrow_drop_down</i></a>
                </ul>
            </div>
        </nav>
    </div>
    <div class="fixed-action-btn">
        <a href="#add_items" class="btn-floating btn-large red modal-trigger">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <!-- retriving the data from database -->
    <?php
    $user = $_SESSION['username'];
    $sql = mysqli_query($db, "SELECT preference FROM user_master WHERE u_name = '$user'");
    $food = mysqli_fetch_assoc($sql);
    $f_type = $food['preference'];
    $id = $_SESSION['id'];
    ?>
    <div id="add_items" class="modal" style="height: 70%; width: 40%;">
        <div class="modal-content">
            <h4 class="center">Add Item</h4>
            <div class="row">
                <form class="col s12" method="post" action="admin.php" enctype="multipart/form-data">
                    <input type="hidden" name="u_id" id="u_id" value="<?= $id; ?>">
                    <div class="row">
                        <div class="input-field col s12" style="margin-bottom: 0px;">
                            <input id="i_name" name="i_name" type="text" class="validate">
                            <label for="i_name">Item Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12" style="margin-bottom: 0px;">
                            <input id="i_price" name="i_price" type="text" class="validate">
                            <label for="i_price">Price</label>
                        </div>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="image" id="image" value="insert">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12" style="margin-bottom: 0px;">
                            <p>
                                <!-- giving an option to select the food type 
                                if the restaurant is providing both, veg and non-veg -->
                                <label style="font-size: 1rem;">Is the item:</label>
                                <?php if ($f_type != 'Both') { ?>
                                    <label>
                                        <input class="with-gap" name="type" type="radio" value="<?= $f_type ?>" checked />
                                        <span><?= $f_type ?></span>
                                    </label>
                                <?php } else { ?>
                                    <label>
                                        <input class="with-gap" name="type" type="radio" value="Veg" checked />
                                        <span>Vegeterian</span>
                                    </label>
                                    <label>
                                        <input class="with-gap" name="type" type="radio" value="Non-Veg" />
                                        <span>Non-Vegeterian</span>
                                    </label>
                                <?php } ?>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12" style="margin-bottom: 0px; margin-top: 0px;">
                            <button style="background-color: #F44336;" class="btn waves-effect waves-light" type="submit" id="add" name="add">Add Item
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 70px; margin-bottom: 50px;">
        <h4>Items List</h4>
        <table class="striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Item Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $sql = mysqli_query($db, "SELECT * FROM menu WHERE user_id = '$id'");
            ?>
            <tbody>
                <?php
                foreach ($sql as $data) {
                    ?>
                    <tr id="<?= $data['item_id']; ?>">
                        <td><?= $data['item_id']; ?></td>
                        <td><?= $data['item_name']; ?></td>
                        <td><?= $data['item_price']; ?></td>
                        <td><?= $data['food_type']; ?></td>
                        <td>
                            <a class="breadcrums delete">
                                <i class="material-icons">delete</i>
                            </a>
                            <a class="breadcrums create">
                                <i class="material-icons">create</i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="footer-copyright black">
        <div class="container white-text">
            Made by <a class="white-text text-lighten-3" href="https://www.linkedin.com/in/madhavpt/">Madhav Trivedi</a>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
    $(document).ready(function() {
        $('#add_items').modal();
    });

    /* delete function */
    $('.delete').on('click', function() {
        var id = $(this).closest('tr').attr('id');
        var el = this;
        $.ajax({
            url: "item_delete.php",
            type: "POST",
            data: {
                id: id
            },
            success: function() {
                confirm("Are you sure you want to delete?");
                $(el).closest('tr').fadeOut(800, function() {
                    $(this).remove();
                });
            }
        });
    });

    $(".dropdown-trigger").dropdown({
        coverTrigger: false
    });
    $(document).ready(function() {
        $("#add").on('click', function() {
            var img_name = $('#image').val();
            if (img_name == '') {
                alert('please select image');
                return false;
            } else {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(extension, ['gif', 'jpg', 'jpeg', 'png']) == -1) {
                    alert('invalid');
                    $('#image').val();
                    return false;
                }
            }
        });
    });

    $('.create').on('click', function(){
        var i = $(this).closest('tr').attr('id');
        var t = $(this).closest('tr').find('nth-child(3)');
        console.log(t);
    });
</script>

</html>