<?php
/**
 * Class file for AmazonFPSTypeGetSubscriptionDetailsResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetSubscriptionDetailsResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetSubscriptionDetailsResult extends AmazonFPSWsdlClass
{
	/**
	 * The SubscriptionDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeSubscriptionDetails
	 */
	public $SubscriptionDetails;
	/**
	 * Constructor
	 * @param AmazonFPSTypeSubscriptionDetails SubscriptionDetails
	 * @return AmazonFPSTypeGetSubscriptionDetailsResult
	 */
	public function __construct($_SubscriptionDetails = null)
	{
		parent::__construct(array('SubscriptionDetails'=>$_SubscriptionDetails));
	}
	/**
	 * Set SubscriptionDetails
	 * @param SubscriptionDetails SubscriptionDetails
	 * @return SubscriptionDetails
	 */
	public function setSubscriptionDetails($_SubscriptionDetails)
	{
		return ($this->SubscriptionDetails = $_SubscriptionDetails);
	}
	/**
	 * Get SubscriptionDetails
	 * @return AmazonFPSTypeSubscriptionDetails
	 */
	public function getSubscriptionDetails()
	{
		return $this->SubscriptionDetails;
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