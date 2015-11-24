<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Lookups;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Lookups\V1\PhoneNumberList;
use Twilio\Version;

/**
 * @property PhoneNumberList phoneNumbers
 */
class V1 extends Version {
    protected $_phoneNumbers = null;

    /**
     * Construct the V1 version of Lookups
     * 
     * @param Domain $domain Domain that contains the version
     * @return V1 V1 version of Lookups
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    /**
     * @return PhoneNumberList 
     */
    protected function getPhoneNumbers() {
        if (!$this->_phoneNumbers) {
            $this->_phoneNumbers = new PhoneNumberList($this);
        }
        return $this->_phoneNumbers;
    }

    /**
     * Magic getter to lazy load root resources
     * 
     * @param string $name Resource to return
     * @return ListResource The requested resource
     * @throws TwilioException For unknown resource
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown resource ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Lookups.V1]';
    }
}