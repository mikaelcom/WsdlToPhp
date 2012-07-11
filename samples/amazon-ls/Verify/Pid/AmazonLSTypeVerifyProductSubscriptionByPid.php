<?php
/**
 * Class file for AmazonLSTypeVerifyProductSubscriptionByPid
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeVerifyProductSubscriptionByPid
 * @date 10/07/2012
 */
class AmazonLSTypeVerifyProductSubscriptionByPid extends AmazonLSWsdlClass
{
	/**
	 * The PersistentIdentifier
	 * @var string
	 */
	public $PersistentIdentifier;
	/**
	 * The ProductCode
	 * @var string
	 */
	public $ProductCode;
	/**
	 * Constructor
	 * @param string PersistentIdentifier
	 * @param string ProductCode
	 * @return AmazonLSTypeVerifyProductSubscriptionByPid
	 */
	public function __construct($_PersistentIdentifier = null,$_ProductCode = null)
	{
		parent::__construct(array('PersistentIdentifier'=>$_PersistentIdentifier,'ProductCode'=>$_ProductCode));
	}
	/**
	 * Set PersistentIdentifier
	 * @param string PersistentIdentifier
	 * @return string
	 */
	public function setPersistentIdentifier($_PersistentIdentifier)
	{
		return ($this->PersistentIdentifier = $_PersistentIdentifier);
	}
	/**
	 * Get PersistentIdentifier
	 * @return string
	 */
	public function getPersistentIdentifier()
	{
		return $this->PersistentIdentifier;
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