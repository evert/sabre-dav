<?php

/**
 * LockTokenMatchesRequestUri
 * 
 * @package Sabre
 * @subpackage DAV
 * @version $Id: Exception.php 348 2009-03-26 00:24:28Z evertpot $
 * @copyright Copyright (C) 2007-2009 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/) 
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */

/**
 * LockTokenMatchesRequestUri 
 *
 * This exception is thrown by UNLOCK if a supplied lock-token is invalid 
 */
class Sabre_DAV_Exception_LockTokenMatchesRequestUri extends Sabre_DAV_Exception_Conflict {

    function __construct() {

        $this->message = 'The locktoken supplied does not match any locks on this entity';

    }

    function serialize(DOMElement $errorNode) {

        $error = $errorNode->ownerDocument->createElementNS('DAV:','d:lock-token-matches-request-uri');
        $errorNode->appendChild($error);

    }

}
