<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

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
 * @property string errorCode
 * @property string log
 * @property string messageDate
 * @property string messageText
 * @property string moreInfo
 * @property string requestMethod
 * @property string requestUrl
 * @property string requestVariables
 * @property string responseBody
 * @property string responseHeaders
 * @property string sid
 * @property string uri
 */
class NotificationInstance extends InstanceResource {
    /**
     * Initialize the NotificationInstance
     * 
     * @return NotificationInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'apiVersion' => $payload['api_version'],
            'callSid' => $payload['call_sid'],
            'dateCreated' => $payload['date_created'],
            'dateUpdated' => $payload['date_updated'],
            'errorCode' => $payload['error_code'],
            'log' => $payload['log'],
            'messageDate' => $payload['message_date'],
            'messageText' => $payload['message_text'],
            'moreInfo' => $payload['more_info'],
            'requestMethod' => $payload['request_method'],
            'requestUrl' => $payload['request_url'],
            'sid' => $payload['sid'],
            'uri' => $payload['uri'],
            'requestVariables' => array_key_exists('request_variables', $payload) ? $payload['request_variables'] : null,
            'responseBody' => array_key_exists('response_body', $payload) ? $payload['response_body'] : null,
            'responseHeaders' => array_key_exists('response_headers', $payload) ? $payload['response_headers'] : null,
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return NotificationContext Context for this NotificationInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new NotificationContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * @return string The unique sid that identifies this account
     */
    protected function getAccountSid() {
        return $this->properties['accountSid'];
    }

    /**
     * @return string The version of the Twilio API in use
     */
    protected function getApiVersion() {
        return $this->properties['apiVersion'];
    }

    /**
     * @return string The string that uniquely identifies the call
     */
    protected function getCallSid() {
        return $this->properties['callSid'];
    }

    /**
     * @return string The date this resource was created
     */
    protected function getDateCreated() {
        return $this->properties['dateCreated'];
    }

    /**
     * @return string The date this resource was last updated
     */
    protected function getDateUpdated() {
        return $this->properties['dateUpdated'];
    }

    /**
     * @return string A unique error code corresponding to the notification
     */
    protected function getErrorCode() {
        return $this->properties['errorCode'];
    }

    /**
     * @return string An integer log level
     */
    protected function getLog() {
        return $this->properties['log'];
    }

    /**
     * @return string The date the notification was generated
     */
    protected function getMessageDate() {
        return $this->properties['messageDate'];
    }

    /**
     * @return string The text of the notification.
     */
    protected function getMessageText() {
        return $this->properties['messageText'];
    }

    /**
     * @return string A URL for more information about the error code
     */
    protected function getMoreInfo() {
        return $this->properties['moreInfo'];
    }

    /**
     * @return string HTTP method used with the request url
     */
    protected function getRequestMethod() {
        return $this->properties['requestMethod'];
    }

    /**
     * @return string URL of the resource that generated the notification
     */
    protected function getRequestUrl() {
        return $this->properties['requestUrl'];
    }

    /**
     * @return string Twilio-generated HTTP variables sent to the server
     */
    protected function getRequestVariables() {
        return $this->properties['requestVariables'];
    }

    /**
     * @return string The HTTP body returned by your server.
     */
    protected function getResponseBody() {
        return $this->properties['responseBody'];
    }

    /**
     * @return string The HTTP headers returned by your server.
     */
    protected function getResponseHeaders() {
        return $this->properties['responseHeaders'];
    }

    /**
     * @return string A string that uniquely identifies this notification
     */
    protected function getSid() {
        return $this->properties['sid'];
    }

    /**
     * @return string The URI for this resource
     */
    protected function getUri() {
        return $this->properties['uri'];
    }

    /**
     * Fetch a NotificationInstance
     * 
     * @return NotificationInstance Fetched NotificationInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the NotificationInstance
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
        return '[Twilio.Api.V2010.NotificationInstance ' . implode(' ', $context) . ']';
    }
}