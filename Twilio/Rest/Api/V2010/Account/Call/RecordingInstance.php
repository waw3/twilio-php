<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string apiVersion
 * @property string callSid
 * @property string dateCreated
 * @property string dateUpdated
 * @property string duration
 * @property string sid
 * @property string uri
 */
class RecordingInstance extends InstanceResource {
    /**
     * Initialize the RecordingInstance
     * 
     * @return RecordingInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $callSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'apiVersion' => $payload['api_version'],
            'callSid' => $payload['call_sid'],
            'dateCreated' => $payload['date_created'],
            'dateUpdated' => $payload['date_updated'],
            'duration' => $payload['duration'],
            'sid' => $payload['sid'],
            'uri' => $payload['uri'],
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
            'callSid' => $callSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return RecordingContext Context for this RecordingInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new RecordingContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['callSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * @return string The account_sid
     */
    protected function getAccountSid() {
        return $this->properties['accountSid'];
    }

    /**
     * @return string The api_version
     */
    protected function getApiVersion() {
        return $this->properties['apiVersion'];
    }

    /**
     * @return string The call_sid
     */
    protected function getCallSid() {
        return $this->properties['callSid'];
    }

    /**
     * @return string The date_created
     */
    protected function getDateCreated() {
        return $this->properties['dateCreated'];
    }

    /**
     * @return string The date_updated
     */
    protected function getDateUpdated() {
        return $this->properties['dateUpdated'];
    }

    /**
     * @return string The duration
     */
    protected function getDuration() {
        return $this->properties['duration'];
    }

    /**
     * @return string The sid
     */
    protected function getSid() {
        return $this->properties['sid'];
    }

    /**
     * @return string The uri
     */
    protected function getUri() {
        return $this->properties['uri'];
    }

    /**
     * Fetch a RecordingInstance
     * 
     * @return RecordingInstance Fetched RecordingInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the RecordingInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown property: ' . $name);
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
        return '[Twilio.Api.V2010.RecordingInstance ' . implode(' ', $context) . ']';
    }
}