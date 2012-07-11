<?php
/**
 * Class file for AmazonLSTypeGetActiveSubscriptionsByPidResult
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeGetActiveSubscriptionsByPidResult
 * @date 10/07/2012
 */
class AmazonLSTypeGetActiveSubscriptionsByPidResult extends AmazonLSWsdlClass
{
	/**
	 * The ProductCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $ProductCode;
	/**
	 * Constructor
	 * @param string ProductCode
	 * @return AmazonLSTypeGetActiveSubscriptionsByPidResult
	 */
	public function __construct($_ProductCode = null)
	{
		parent::__construct(array('ProductCode'=>$_ProductCode));
	}
	/**
	 * Set ProductCode
	 * @param string ProductCode
	 * @return string
	 */
	public function setProductCode($_ProductCode)
	{
		return ($this->ProductCode = $_ProductCode);
	}
	/**
	 * Get ProductCode
	 * @return string
	 */
	public function getProductCode()
	{
		return $this->ProductCode;
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