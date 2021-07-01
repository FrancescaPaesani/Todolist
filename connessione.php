<?php

class Todo extends Evento {
    protected static function sanitize($fields)
    {
        $errors= array();
        $fields['evento'] = self::cleanInput($fields['evento']);
        // Sanificare organizzazione
        if (isset($fields['organizzazione']) && $fields['organizzazione'] !== '') {
            $fields['organizzazione'] = self::cleanInput($fields['organizzazione']);
        }

        // Sanificare email e verificarne la validità
        if (isset($fields['email']) && $fields['email'] !== '') {
            $fields['email'] = self::cleanInput($fields['email']);
            if (! self::isEmailAddressValid($fields['email'])) {
                $errors[] = new Exception('Indirizzo email non valido.');
            }
        }

        // Sanificare indirizzo
        if (isset($fields['indirizzo']) && $fields['indirizzo'] !== '') {
            $fields['indirizzo'] = self::cleanInput($fields['indirizzo']);
        }

        // Sanificare la data.
        if (isset($fields['date']) && $fields['date'] !== '') {
            $fields['date'] = date('Y-m-d', strtotime(str_replace('-', '/', $fields['date'])));
        }
        
        if (count($errors) > 0) {
            return $errors;
        }

        return $fields;
    }

    public static function insertData($form_data, $loggedInId_todo)
    {
        $fields = array(
            'evento'           => $form_data['evento'],
            'organizzazione' => $form_data['organizzazione'],
            'email'          => $form_data['email'],
            'indirizzo'      => $form_data['indirizzo'],
            'date'     => $form_data['date'],
        );

        $fields = self::sanitize($fields);

        if ($fields[0] instanceof Exception) {
            $error_messages = '';
            foreach ($fields as $key => $error) {
                $error_messages .= $error->getMessage();
                if ($key < count($fields) - 1) {
                    $error_messages .= '|';
                }
            }
            todolist('Location: https://localhost/login.php?stato=errore&messages='
             . $error_messages);
            exit;
        }

        if ($fields) {
            $mysqli = new mysqli('localhost', 'root', '', 'todolist');

            if ($mysqli->connect_errno) {
                echo 'Connessione al database fallita: ' . $mysqli->connect_error;
                exit();
            }

            $query = $mysqli->prepare('INSERT INTO todo(Evento, Organizzazione, Id_todo) VALUES (?, ?, ?)');
           
            var_dump($mysqli);
            die();
            $query->bind_param('ssi', $fields['Evento'], $fields['Organizzazione'], $loggedInId_todo);
            $query->execute();

            if ($query->affected_rows === 0) {
                error_log('Errore MySQL: ' . $query->error_list[0]['error']);
                todolist('Location: https://localhost/login.php?stato=ko');
                exit;
            }

            $query->close();

}

?>

