<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sms;

use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class ShortCodeContext extends InstanceContext {
    /**
     * Initialize the ShortCodeContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid The account_sid
     * @param string $sid Fetch by unique short-code Sid
     * @return ShortCodeContext 
     */
    public function __construct(Version $version, $accountSid, $sid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
            'sid' => $sid,
        );
        $this->uri = '/Accounts/' . $accountSid . '/SMS/ShortCodes/' . $sid . '.json';
    }

    /**
     * Fetch a ShortCodeInstance
     * 
     * @return ShortCodeInstance Fetched ShortCodeInstance
     */
    public function fetch() {
        $params = Values::of(array());
        
        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );
        
        return new ShortCodeInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the ShortCodeInstance
     * 
     * @return ShortCodeInstance Updated ShortCodeInstance
     */
    public function update($options) {
        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'ApiVersion' => $options['apiVersion'],
            'SmsUrl' => $options['smsUrl'],
            'SmsMethod' => $options['smsMethod'],
            'SmsFallbackUrl' => $options['smsFallbackUrl'],
            'SmsFallbackMethod' => $options['smsFallbackMethod'],
        ));
        
        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new ShortCodeInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.ShortCodeContext ' . implode(' ', $context) . ']';
    }
}