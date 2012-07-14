<?php
/**
 * Class file for PayPalTypeUpdateRecurringPaymentsProfileResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateRecurringPaymentsProfileResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeUpdateRecurringPaymentsProfileResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ProfileID;
	/**
	 * Constructor
	 * @param string ProfileID
	 * @return PayPalTypeUpdateRecurringPaymentsProfileResponseDetailsType
	 */
	public function __construct($_ProfileID)
	{
		parent::__construct(array('ProfileID'=>$_ProfileID));
	}
	/**
	 * Set ProfileID
	 * @param string ProfileID
	 * @return string
	 */
	public function setProfileID($_ProfileID)
	{
		return ($this->ProfileID = $_ProfileID);
	}
	/**
	 * Get ProfileID
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
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