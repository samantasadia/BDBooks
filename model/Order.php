<?php
class Order {

    private $connection;
    public function __construct(mysqli $connection) {
        $this->connection = $connection;
    }

    public function getAllOrders() {

        $sql = 'SELECT * FROM orders';
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->get_result();
        // Fetch the data into a stdClass[] array.
        $rows = [];
        while ($row = $result->fetch_object()) {
            $rows[] = $row;
        }
        return $rows;
    }

    //get book by id
    public function getOrderById(int $id) {

        $sql = 'SELECT *
                FROM orders
                WHERE id = ?
                LIMIT 1';

        $statement = $this->connection->prepare($sql);
        $statement->bind_param('i', $id);
        $statement->execute();
        $result = $statement->get_result();
        // Fetch the data into a stdClass object.
        $row = $result->fetch_object();
        return $row;
    }
  }
?>
