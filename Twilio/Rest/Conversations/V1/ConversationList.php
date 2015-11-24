<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Conversations\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Rest\Conversations\V1\Conversation\CompletedList;
use Twilio\Rest\Conversations\V1\Conversation\InProgressList;
use Twilio\Version;

/**
 * @property InProgressList inProgress
 * @property CompletedList completed
 */
class ConversationList extends ListResource {
    protected $_inProgress = null;
    protected $_completed = null;

    /**
     * Construct the ConversationList
     * 
     * @param Version $version Version that contains the resource
     * @return ConversationList 
     */
    public function __construct(Version $version) {
        parent::__construct($version);
        
        // Path Solution
        $this->solution = array();
    }

    /**
     * Access the inProgress
     */
    protected function getInProgress() {
        if (!$this->_inProgress) {
            $this->_inProgress = new InProgressList(
                $this->version
            );
        }
        
        return $this->_inProgress;
    }

    /**
     * Access the completed
     */
    protected function getCompleted() {
        if (!$this->_completed) {
            $this->_completed = new CompletedList(
                $this->version
            );
        }
        
        return $this->_completed;
    }

    /**
     * Constructs a ConversationContext
     * 
     * @param string $sid The sid
     * @return ConversationContext 
     */
    public function getContext($sid) {
        return new ConversationContext(
            $this->version,
            $sid
        );
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
        return '[Twilio.Conversations.V1.ConversationList]';
    }
}