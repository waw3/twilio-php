<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Conversations;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Conversations\V1\ConversationList;
use Twilio\Version;

/**
 * @property ConversationList conversations
 */
class V1 extends Version {
    protected $_conversations = null;

    /**
     * Construct the V1 version of Conversations
     * 
     * @param Domain $domain Domain that contains the version
     * @return V1 V1 version of Conversations
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    /**
     * @return ConversationList 
     */
    protected function getConversations() {
        if (!$this->_conversations) {
            $this->_conversations = new ConversationList($this);
        }
        return $this->_conversations;
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
        return '[Twilio.Conversations.V1]';
    }
}