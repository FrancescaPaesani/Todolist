<?php
namespace DataHandling;
use inputSanification;
abstract class Evento
{
    use inputSanification;
    abstract protected static function sanitize($fields);
    abstract public static function insertData($form_data, $loggedInEvento);
    abstract public static function selectData($args = null);
    abstract public static function deleteData($id= null);
    abstract public static function updateData($form_data, $id);
    public static function isEmailAddressValid($email_address)
    {
        // return preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i', $email_address);
        return filter_var($email_address, FILTER_VALIDATE_EMAIL);
    }
}