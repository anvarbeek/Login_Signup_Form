<?php session_start();
if (isset($_SESSION['xotira'])) {
    if ($_SESSION['xotira'] === true) {
        header('location: ../index.php?login=true');
    }
}

?>



<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">CodingLab</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Content</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Analytics</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="link-name">Like</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Comment</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Share</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="../index.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class='bx bx-user bx-tada'></i>
                        <span class="text">Total Likes</span>
                        <span class="number">23</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Share</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">

                    <div class="table-container ">
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Age</th>
                                    <th>Tel</th>
                                    <th>Password</th>
                                    <th>Admin</th>
                                    <th>Deletes <a href="logout.php" type="submit" style="text-decoration: none; color:brown; font-size:20px">All <i class='bx bx-trash'></i></a></th>
                                </tr>
                            </thead><?php $n = 1;
                                    if (isset($_SESSION['xotira']) != []) {
                                        foreach ($_SESSION['xotira'] as $xotira) {
                                    ?>
                                    <tbody>

                                        <tr>

                                            <td><?= $n ?></td>
                                            <td><?= $xotira['name'] ?></td>
                                            <td><?= $xotira['email'] ?></td>
                                            <td><?= $xotira['age'] ?></td>
                                            <td><?= $xotira['tel'] ?></td>
                                            <td><?= $xotira['password'] ?></td>
                                            <td><?= $xotira['check'] ?></td>
                                            <td>
                                                <form action="index.php" method="post">
                                                    <button name="btn-delete" value="<? echo $n;
                                                                                        if (isset($_POST['btn-delete'])) {

                                                                                            unset($xotira[$n]);
                                                                                        } ?>">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody><?php $n++;
                                        }
                                    }
                                            ?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>