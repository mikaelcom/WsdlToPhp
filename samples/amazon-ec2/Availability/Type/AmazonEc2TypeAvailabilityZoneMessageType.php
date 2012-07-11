<?php
/**
 * Class file for AmazonEc2TypeAvailabilityZoneMessageType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeAvailabilityZoneMessageType
 * @date 10/07/2012
 */
class AmazonEc2TypeAvailabilityZoneMessageType extends AmazonEc2WsdlClass
{
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * Constructor
	 * @param string message
	 * @return AmazonEc2TypeAvailabilityZoneMessageType
	 */
	public function __construct($_message = null)
	{
		parent::__construct(array('message'=>$_message));
	}
	/**
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>