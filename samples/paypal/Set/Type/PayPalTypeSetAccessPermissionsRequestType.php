<?php
/**
 * Class file for PayPalTypeSetAccessPermissionsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetAccessPermissionsRequestType
 * @date 14/07/2012
 */
class PayPalTypeSetAccessPermissionsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The SetAccessPermissionsRequestDetails
	 * @var PayPalTypeSetAccessPermissionsRequestDetailsType
	 */
	public $SetAccessPermissionsRequestDetails;
	/**
	 * Constructor
	 * @param PayPalTypeSetAccessPermissionsRequestDetailsType SetAccessPermissionsRequestDetails
	 * @return PayPalTypeSetAccessPermissionsRequestType
	 */
	public function __construct($_SetAccessPermissionsRequestDetails = null)
	{
		PayPalWsdlClass::__construct(array('SetAccessPermissionsRequestDetails'=>$_SetAccessPermissionsRequestDetails));
	}
	/**
	 * Set SetAccessPermissionsRequestDetails
	 * @param SetAccessPermissionsRequestDetailsType SetAccessPermissionsRequestDetails
	 * @return SetAccessPermissionsRequestDetailsType
	 */
	public function setSetAccessPermissionsRequestDetails($_SetAccessPermissionsRequestDetails)
	{
		return ($this->SetAccessPermissionsRequestDetails = $_SetAccessPermissionsRequestDetails);
	}
	/**
	 * Get SetAccessPermissionsRequestDetails
	 * @return PayPalTypeSetAccessPermissionsRequestDetailsType
	 */
	public function getSetAccessPermissionsRequestDetails()
	{
		return $this->SetAccessPermissionsRequestDetails;
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