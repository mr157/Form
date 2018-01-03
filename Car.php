<?php
class Car {
    public $id;
    public $brand;
    public $model;
    public $seat;
    public $equip;
    public $date_1;
    public $time_1;
    public $date_2;
    public $time_2;
    public $first_name;
    public $last_name;
    public $email;
    public $image;
    public $comment;
    
    
    public function save() {
        $params = array(
            'brand' => $this->brand,
            'model' => $this->model,
            'seat' => $this->seat,
            'equip' => $this->equip,
            'date_1' => $this->date_1,
            'time_1' => $this->time_1,
            'date_2' => $this->date_2,
            'time_2' => $this->time_2,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'image' => $this->$image,
            'comment' => $this->comment,

        );

        if ($this->id === NULL) {
            $sql = "INSERT INTO cars(
                        brand, model, seat, equip, date_1, time_1, date_2, time_2, first_name, last_name, email, image, comment

                    ) VALUES (
                       :brand, :model, :seat, :equip, :date_1, :time_1, :date_2, :time_2, :first_name, :last_name, :email, :image, :comment

                    )";
        }
        else if ($this->id !== NULL) {
            $params["id"] = $this->id;

            $sql = "UPDATE cars SET
                        brand = :brand,
                        model = :model,
                        seat = :seat,
                        equip = :equip,
                        date_1 = :date_1,
                        time_1 = :time_1,
                        date_2 = :date_2,
                        time_2 = :time_2,
                        first_name = :first_name,
                        last_name = :last_name,
                        email = :email,
                        image = :image,
                        comment = :comment

                    WHERE id = :id";
        }

        $conn = Connect::getInstance();
        $stmt = $conn->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to save cars");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error saving cars");
            }
            if ($this->id === NULL) {
                $this->id = $conn->lastInsertId('Car');
            }
        }
    }

    
    public function delete() {
        if (empty($this->id)) {
            throw new Exception("Unsaved car cannot be deleted");
        }
        $params = array(
            'id' => $this->id
        );
        $sql = 'DELETE FROM cars WHERE id = :id';
        $connect = Connect::getInstance();
        $stmt = $connect->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to delete car entry");
        }
        else {
            $rowCount = $stmt->rowCount();
            if ($rowCount !== 1) {
                throw new Exception("Error deleting car entry");
            }
        }
    }
    
    public static function all() {
        $sql = 'SELECT * FROM cars';
        $connect = Connect::getInstance();
        $stmt = $connect->prepare($sql);
        $success = $stmt->execute();
        if (!$success) {
            throw new Exception("Failed to retrieve cars");
        }
        else {
            $courses = $stmt->fetchAll(PDO::FETCH_CLASS, 'Car');
            return $courses;
        }
    }
    
    public static function find($id) {
        $params = array(
            'id' => $id
        );
        $sql = 'SELECT * FROM cars WHERE id = :id';
        $connect = Connect::getInstance();
        $stmt = $connect->prepare($sql);
        $success = $stmt->execute($params);
        if (!$success) {
            throw new Exception("Failed to retrieve entry");
        }
        else {
            $car = $stmt->fetchObject('Car');
            return $car;
        }
    }    
}
?>