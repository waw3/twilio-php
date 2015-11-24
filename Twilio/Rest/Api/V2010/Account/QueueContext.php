<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\Rest\Api\V2010\Account\Queue\MemberList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property MemberList members
 */
class QueueContext extends InstanceContext {
    protected $_members = null;

    /**
     * Initialize the QueueContext
     * 
     * @param Version $version Version that contains the resource
     * @param string $accountSid The account_sid
     * @param string $sid Fetch by unique queue Sid
     * @return QueueContext 
     */
    public function __construct(Version $version, $accountSid, $sid) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array(
            'accountSid' => $accountSid,
            'sid' => $sid,
        );
        $this->uri = '/Accounts/' . $accountSid . '/Queues/' . $sid . '.json';
    }

    /**
     * Fetch a QueueInstance
     * 
     * @return QueueInstance Fetched QueueInstance
     */
    public function fetch() {
        $params = Values::of(array());
        
        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );
        
        return new QueueInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the QueueInstance
     * 
     * @return QueueInstance Updated QueueInstance
     */
    public function update($options) {
        $data = Values::of(array(
            'FriendlyName' => $options['friendlyName'],
            'MaxSize' => $options['maxSize'],
        ));
        
        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );
        
        return new QueueInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the QueueInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Access the members
     * 
     * @return MemberList 
     */
    protected function getMembers() {
        if (!$this->members) {
            $this->members = new MemberList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }
        
        return $this->members;
    }

    /**
     * Magic getter to lazy load subresources
     * 
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }
        
        throw new TwilioException('Unknown subresource ' . $name);
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
        return '[Twilio.Api.V2010.QueueContext ' . implode(' ', $context) . ']';
    }
}