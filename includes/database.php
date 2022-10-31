<?php 
    /**
     *  Get the database connection 
     * 
     *  @return object Connection to a MySQL server
     */
    function getDB() {
        $db_host = "localhost";
        $db_name = "barcla29";
        $db_user = "barcla29";
        $db_pass = "1Temp125!";

        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        if (mysqli_connect_error()) {
            echo mysqli_connect_error();
            exit;
        }
        // print_r("connected");
        return $conn;
    }

    /**
     * @param object $conn Connection to the database
     * @param object $id the article id
     * 
     * @return mixed An associative array containing the article with that id, or null if not found
     */

    function getArticle($conn, $id) {
        $sql = "SELECT *
                FROM article
                WHERE id  = ?";
        
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt === false) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param($stmt, "i", $id);

            if(mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                return mysqli_fetch_array($result, MYSQLI_ASSOC);
            }
        }
    }
?>