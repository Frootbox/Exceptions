<?php 
/**
 * 
 */

namespace Frootbox\Exceptions;

/**
 * 
 */
abstract class BaseException extends \Exception implements Interfaces\Exception {

    /**
     *
     */
    public function toString ( ) {

        return $this->getMessage();
    }
}