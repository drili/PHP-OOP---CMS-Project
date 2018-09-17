<?php
      // User class (regular setup using instanciation to initiliaze class)
      // --->
      // class User {
      //       public function find_all_users() {
      //             global $database;
      //
      //             $result_set = $database->query("SELECT * FROM users");
      //             return $result_set;
      //       }
      // }
      // <---

      // User class using Static Method and Propeties Usage
      class User {
            public $id;
            public $username;
            public $password;
            public $first_name;
            public $last_name;

            public static function find_all_users() {
                  // global $database;
                  // $result_set = $database->query("SELECT * FROM users");
                  // return $result_set;

                  // Using our find_this_query method
                  return self::find_this_query("SELECT * FROM users");
            }

            public static function find_user_by_id($user_id) {
                  global $database;

                  // $result_user_id = $database->query("SELECT * FROM users WHERE id = $user_id LIMIT 1");
                  // OR using the find_this_query method:
                  $the_result_array = self::find_this_query("SELECT * FROM users WHERE id = $user_id LIMIT 1");
                  if (!empty($the_result_array)) {
                        $first_item = array_shift($the_result_array);
                        return $first_item;
                  } else {
                        return false;
                  }
                  return $found_user;
            }

            // Create this query method
            public static function find_this_query($sql) {
                  global $database;

                  $result_set = $database->query($sql);
                  $the_object_array = array();

                  while ($row = mysqli_fetch_array($result_set)) {
                        $the_object_array[] = self::instantiation($row);
                  }
                  return $the_object_array;
            }

            // Auto instantiation
            public static function instantiation($user_record) {
                  $user_object = new self;

                  // $user_object->id = $user_record['id'];
                  // $user_object->username = $user_record['username'];
                  // $user_object->password = $user_record['password'];
                  // $user_object->first_name = $user_record['first_name'];
                  // $user_object->last_name = $user_record['last_name'];

                  // --- Auto instantiation using foreach loop
                  foreach ($user_record as $attribute => $value) {
                        if ($user_object->has_the_attribute($attribute)) {
                              $user_object->$attribute = $value;
                        }
                  }
                  return $user_object;
            }

            private function has_the_attribute($attribute) {
                  $object_properties = get_object_vars($this);

                  return array_key_exists($attribute, $object_properties);
            }
      }
?>
