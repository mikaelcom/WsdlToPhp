<?php
/**
 * Class file for AmazonFPSTypeGetSubscriptionDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetSubscriptionDetails
 * @date 10/07/2012
 */
class AmazonFPSTypeGetSubscriptionDetails extends AmazonFPSWsdlClass
{
	/**
	 * The SubscriptionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SubscriptionId;
	/**
	 * Constructor
	 * @param string SubscriptionId
	 * @return AmazonFPSTypeGetSubscriptionDetails
	 */
	public function __construct($_SubscriptionId = null)
	{
		parent::__construct(array('SubscriptionId'=>$_SubscriptionId));
	}
	/**
	 * Set SubscriptionId
	 * @param string SubscriptionId
	 * @return string
	 */
	public function setSubscriptionId($_SubscriptionId)
	{
		return ($this->SubscriptionId = $_SubscriptionId);
	}
	/**
	 * Get SubscriptionId
	 * @return string
	 */
	public function getSubscriptionId()
	{
		return $this->SubscriptionId;
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