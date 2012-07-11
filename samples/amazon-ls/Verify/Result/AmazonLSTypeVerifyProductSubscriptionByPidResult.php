<?php
/**
 * Class file for AmazonLSTypeVerifyProductSubscriptionByPidResult
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeVerifyProductSubscriptionByPidResult
 * @date 10/07/2012
 */
class AmazonLSTypeVerifyProductSubscriptionByPidResult extends AmazonLSWsdlClass
{
	/**
	 * The Subscribed
	 * @var boolean
	 */
	public $Subscribed;
	/**
	 * Constructor
	 * @param boolean Subscribed
	 * @return AmazonLSTypeVerifyProductSubscriptionByPidResult
	 */
	public function __construct($_Subscribed = null)
	{
		parent::__construct(array('Subscribed'=>$_Subscribed));
	}
	/**
	 * Set Subscribed
	 * @param boolean Subscribed
	 * @return boolean
	 */
	public function setSubscribed($_Subscribed)
	{
		return ($this->Subscribed = $_Subscribed);
	}
	/**
	 * Get Subscribed
	 * @return boolean
	 */
	public function getSubscribed()
	{
		return $this->Subscribed;
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