<?php
/**
 * Class file for AmazonLSTypeGetActiveSubscriptionsByPid
 * @date 10/07/2012
 */
/**
 * Class AmazonLSTypeGetActiveSubscriptionsByPid
 * @date 10/07/2012
 */
class AmazonLSTypeGetActiveSubscriptionsByPid extends AmazonLSWsdlClass
{
	/**
	 * The PersistentIdentifier
	 * @var string
	 */
	public $PersistentIdentifier;
	/**
	 * Constructor
	 * @param string PersistentIdentifier
	 * @return AmazonLSTypeGetActiveSubscriptionsByPid
	 */
	public function __construct($_PersistentIdentifier = null)
	{
		parent::__construct(array('PersistentIdentifier'=>$_PersistentIdentifier));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>