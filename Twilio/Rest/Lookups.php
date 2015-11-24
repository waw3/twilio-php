<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;
use Twilio\Rest\Lookups\V1;

/**
 * @property V1 v1
 */
class Lookups extends Domain {
    protected $_v1 = null;

    /**
     * Construct the Lookups Domain
     * 
     * @param Client $client Twilio\Rest\Client to communicate with Twilio
     * @return Lookups Domain for Lookups
     */
    public function __construct(Client $client) {
        parent::__construct($client);
        
        $this->baseUrl = 'https://lookups.twilio.com';
    }

    /**
     * @return V1 Version v1 of lookups
     */
    public function getV1() {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * Magic getter to lazy load version
     * 
     * @param string $name Version to return
     * @return Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * @return PhoneNumberList 
     */
    public function phoneNumbers() {
        return $this->v1->phoneNumbers();
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Lookups]';
    }
}