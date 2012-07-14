<?php
/**
 * Class file for PayPalTypeAuthorizationRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAuthorizationRequestType
 * @date 14/07/2012
 */
class PayPalTypeAuthorizationRequestType extends PayPalWsdlClass
{
	/**
	 * The IsRequested
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var boolean
	 */
	public $IsRequested;
	/**
	 * Constructor
	 * @param boolean IsRequested
	 * @return PayPalTypeAuthorizationRequestType
	 */
	public function __construct($_IsRequested)
	{
		parent::__construct(array('IsRequested'=>$_IsRequested));
	}
	/**
	 * Set IsRequested
	 * @param boolean IsRequested
	 * @return boolean
	 */
	public function setIsRequested($_IsRequested)
	{
		return ($this->IsRequested = $_IsRequested);
	}
	/**
	 * Get IsRequested
	 * @return boolean
	 */
	public function getIsRequested()
	{
		return $this->IsRequested;
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