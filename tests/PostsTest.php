<?php

include "database/Database.php";

class PostsTest extends PHPUnit_Framework_TestCase {
    public function test_should_create_post() {
        $database = new DatabaseTest();
        echo $database->getRowCount("user");


        $this->assertEquals(2+2, 4);
    }
}
