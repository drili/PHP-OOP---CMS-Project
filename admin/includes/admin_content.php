<div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
            <div class="col-lg-12">
                  <h1 class="page-header">
                  Blank Page
                  <small>Subheading</small>
                  </h1>

                  <?php
                  // Example fetching data using User class, by instanciating
                  // the user class
                  // --->
                        // $user = new User();
                        // $result_set = $user->find_all_users();
                        //
                        // while ($row = mysqli_fetch_array($result_set)) {
                        //       echo $row['username'] . "<br>";
                        // }
                  // <---
                  ?>

                  <?php
                  // Using Static method to call User class
                  // -->
                        // $result_set = User::find_all_users();
                        //
                        // while ($row = mysqli_fetch_array($result_set)) {
                        //       echo $row['username'] . "<br>";
                        // }
                  // <--

                  // Using our find_user_by_id method to find a user by id
                  // --->
                        // $found_user = User::find_user_by_id(1);
                        // echo $found_user['username'];

                        // --- OR using object with properties instead of array
                        // $user = new User();
                        // $user->id = $found_user['id'];
                        // $user->username = $found_user['username'];
                        // $user->password = $found_user['password'];
                        // $user->first_name = $found_user['first_name'];
                        // $user->last_name = $found_user['last_name'];
                        // echo $user->id;

                        // --- OR using auto instantiation
                        // $found_user = User::find_user_by_id(1);
                        // $user = User::instantiation($found_user);
                        //
                        // echo $user->username;
                  // <---
                  ?>

                  <?php
                  // Using our auto instation class to find users
                  // --->
                        $users = User::find_all_users();
                        foreach ($users as $user) {
                              echo $user->username . "<br>";
                        }

                        // --- OR by id
                        $found_user = User::find_user_by_id(1);
                        echo $found_user->username;
                  // <---
                  ?>

                  <ol class="breadcrumb">
                        <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                        </li>
                  </ol>
            </div>
      </div>
      <!-- /.row -->

</div>
<!-- /.container-fluid -->
