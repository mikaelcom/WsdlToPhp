<?php
/**
 * Class file for CdyneIntAddressTypeAddressInternationalResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneIntAddressTypeAddressInternationalResponse
 * @date 03/07/2012
 */
class CdyneIntAddressTypeAddressInternationalResponse extends CdyneIntAddressWsdlClass
{
	/**
	 * The AddressFields
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var CdyneIntAddressTypeArrayOfKeyValue
	 */
	public $AddressFields;
	/**
	 * The ReturnCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $ReturnCode;
	/**
	 * Constructor
	 * @param CdyneIntAddressTypeArrayOfKeyValue AddressFields
	 * @param int ReturnCode
	 * @return CdyneIntAddressTypeAddressInternationalResponse
	 */
	public function __construct($_AddressFields = null,$_ReturnCode = null)
	{
		parent::__construct(array('AddressFields'=>new CdyneIntAddressTypeArrayOfKeyValue($_AddressFields),'ReturnCode'=>$_ReturnCode));
	}
	/**
	 * Set AddressFields
	 * @param ArrayOfKeyValue AddressFields
	 * @return ArrayOfKeyValue
	 */
	public function setAddressFields($_AddressFields)
	{
		return ($this->AddressFields = $_AddressFields);
	}
	/**
	 * Get AddressFields
	 * @return CdyneIntAddressTypeArrayOfKeyValue
	 */
	public function getAddressFields()
	{
		return $this->AddressFields;
	}
	/**
	 * Set ReturnCode
	 * @param int ReturnCode
	 * @return int
	 */
	public function setReturnCode($_ReturnCode)
	{
		return ($this->ReturnCode = $_ReturnCode);
	}
	/**
	 * Get ReturnCode
	 * @return int
	 */
	public function getReturnCode()
	{
		return $this->ReturnCode;
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