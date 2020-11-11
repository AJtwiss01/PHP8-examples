<?php

class Conversation
{
}

class Reply {

}

$objOne = new Conversation();

$objTwo = new Reply();

$Conv = match (get_class($objTwo)) {
    'Conversation' => 'started conversation ',
    'Reply' => 'reply to conversation ',

};


echo $Conv;