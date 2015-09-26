<?php
/**
 * Exception thrown by Math class in case of invalid parameters
 *
 * @author Victoria
 */
class MyException extends Exception {
    /**
     * message parameter is mandatory
     * @param type $message
     * @param type $code
     * @param Exception $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
