<?php
/**
 * Class file for PayPalTypeUpdateAccessPermissionsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateAccessPermissionsResponseType
 * @date 14/07/2012
 */
class PayPalTypeUpdateAccessPermissionsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The status of the update call, Success/Failure. Character length and limitations: 20 single-byte characters
	 * @var string
	 */
	public $Status;
	/**
	 * Constructor
	 * @param string Status
	 * @return PayPalTypeUpdateAccessPermissionsResponseType
	 */
	public function __construct($_Status)
	{
		PayPalWsdlClass::__construct(array('Status'=>$_Status));
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
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