<?php
namespace ToDo;
class Validation {
    private static $validation = [];

    public static function validate($task)
   {
       self::validateSubject($task);
       self::validatePriority($task);
       self::validateDate($task);
       return self::$validation;
   }

   private static function validateSubject()
   {
       if (empty($_POST['subject']) || !preg_match('/\w{5,255}$/', $_POST['subject'])) {
           self::$validation[] = "Subject must contain 5-255 symbols";
       }
   }

   private static function validatePriority()
   {
       if (empty($_POST['priority'])) {
           self::$validation[] = "Please fill in priority field";
       }
   }

   private static function validateDate()
   {
       if ($_POST['dueDate'] < date("Y-m-d")) {
           self::$validation[] = "Date must be greater then today";
       }
   }
}