<?php
/**
 * Class file for SOAddressValidateTypeValidateAddressWithFragmentsResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeValidateAddressWithFragmentsResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeValidateAddressWithFragmentsResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The ValidateAddressWithFragmentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeFragmentAddress
	 */
	public $ValidateAddressWithFragmentsResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeFragmentAddress ValidateAddressWithFragmentsResult
	 * @return SOAddressValidateTypeValidateAddressWithFragmentsResponse
	 */
	public function __construct($_ValidateAddressWithFragmentsResult = null)
	{
		parent::__construct(array('ValidateAddressWithFragmentsResult'=>$_ValidateAddressWithFragmentsResult));
	}
	/**
	 * Set ValidateAddressWithFragmentsResult
	 * @param FragmentAddress ValidateAddressWithFragmentsResult
	 * @return FragmentAddress
	 */
	public function setValidateAddressWithFragmentsResult($_ValidateAddressWithFragmentsResult)
	{
		return ($this->ValidateAddressWithFragmentsResult = $_ValidateAddressWithFragmentsResult);
	}
	/**
	 * Get ValidateAddressWithFragmentsResult
	 * @return SOAddressValidateTypeFragmentAddress
	 */
	public function getValidateAddressWithFragmentsResult()
	{
		return $this->ValidateAddressWithFragmentsResult;
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