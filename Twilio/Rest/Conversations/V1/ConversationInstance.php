<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Conversations\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Rest\Conversations\V1\Conversation;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string sid
 * @property conversation.Status status
 * @property string duration
 * @property string dateCreated
 * @property string startTime
 * @property string endTime
 * @property string accountSid
 * @property string url
 */
class ConversationInstance extends InstanceResource {
    /**
     * Initialize the ConversationInstance
     * 
     * @return ConversationInstance 
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'sid' => $payload['sid'],
            'status' => $payload['status'],
            'duration' => $payload['duration'],
            'dateCreated' => $payload['date_created'],
            'startTime' => $payload['start_time'],
            'endTime' => $payload['end_time'],
            'accountSid' => $payload['account_sid'],
            'url' => $payload['url'],
        );
        
        $this->solution = array(
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return ConversationContext Context for this ConversationInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new ConversationContext(
                $this->version,
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * @return string The sid
     */
    protected function getSid() {
        return $this->properties['sid'];
    }

    /**
     * @return conversation.Status The status
     */
    protected function getStatus() {
        return $this->properties['status'];
    }

    /**
     * @return string The duration
     */
    protected function getDuration() {
        return $this->properties['duration'];
    }

    /**
     * @return string The date_created
     */
    protected function getDateCreated() {
        return $this->properties['dateCreated'];
    }

    /**
     * @return string The start_time
     */
    protected function getStartTime() {
        return $this->properties['startTime'];
    }

    /**
     * @return string The end_time
     */
    protected function getEndTime() {
        return $this->properties['endTime'];
    }

    /**
     * @return string The account_sid
     */
    protected function getAccountSid() {
        return $this->properties['accountSid'];
    }

    /**
     * @return string The url
     */
    protected function getUrl() {
        return $this->properties['url'];
    }

    /**
     * Fetch a ConversationInstance
     * 
     * @return ConversationInstance Fetched ConversationInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Access the participants
     * 
     * @return ParticipantList 
     */
    protected function getParticipants() {
        return $this->proxy()->participants;
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
        return '[Twilio.Conversations.V1.ConversationInstance ' . implode(' ', $context) . ']';
    }
}