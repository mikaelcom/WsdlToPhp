<?php
/**
 * Class file for SOAddressValidateTypeAddressType
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeAddressType
 * @date 05/07/2012
 */
class SOAddressValidateTypeAddressType extends SOAddressValidateWsdlClass
{
	/**
	 * The AddressType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressType;
	/**
	 * The AddressTypeDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressTypeDescription;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string AddressType
	 * @param string AddressTypeDescription
	 * @param SOAddressValidateTypeErr Error
	 * @return SOAddressValidateTypeAddressType
	 */
	public function __construct($_AddressType = null,$_AddressTypeDescription = null,$_Error = null)
	{
		parent::__construct(array('AddressType'=>$_AddressType,'AddressTypeDescription'=>$_AddressTypeDescription,'Error'=>$_Error));
	}
	/**
	 * Set AddressType
	 * @param string AddressType
	 * @return string
	 */
	public function setAddressType($_AddressType)
	{
		return ($this->AddressType = $_AddressType);
	}
	/**
	 * Get AddressType
	 * @return string
	 */
	public function getAddressType()
	{
		return $this->AddressType;
	}
	/**
	 * Set AddressTypeDescription
	 * @param string AddressTypeDescription
	 * @return string
	 */
	public function setAddressTypeDescription($_AddressTypeDescription)
	{
		return ($this->AddressTypeDescription = $_AddressTypeDescription);
	}
	/**
	 * Get AddressTypeDescription
	 * @return string
	 */
	public function getAddressTypeDescription()
	{
		return $this->AddressTypeDescription;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOAddressValidateTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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