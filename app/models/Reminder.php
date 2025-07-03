<?php

class Reminder {

    public function __construct() {
    }

    public function get_all_reminders() {
        $db = db_connect();
        $statement = $db->prepare("select * from reminders;");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function update_reminder($id, $subject) {
        $db = db_connect();
        $statement = $db->prepare("UPDATE reminders SET subject = ? WHERE id = ?");
        return $statement->execute([$subject, $id]);
    }

    public function create_reminder($subject) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO reminders (subject) VALUES (?)");
        return $statement->execute([$subject]);
    }
}
?>
