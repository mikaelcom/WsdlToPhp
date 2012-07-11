<?php
/**
 * Class file for SOContactFixerTypeContact
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerTypeContact
 * @date 08/07/2012
 */
class SOContactFixerTypeContact extends SOContactFixerWsdlClass
{
	/**
	 * The ContactInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactFixerTypeContactInfo
	 */
	public $ContactInfo;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactFixerTypeError
	 */
	public $Error;
	/**
	 * Constructor
	 * @param SOContactFixerTypeContactInfo ContactInfo
	 * @param SOContactFixerTypeError Error
	 * @return SOContactFixerTypeContact
	 */
	public function __construct($_ContactInfo = null,$_Error = null)
	{
		parent::__construct(array('ContactInfo'=>$_ContactInfo,'Error'=>$_Error));
	}
	/**
	 * Set ContactInfo
	 * @param ContactInfo ContactInfo
	 * @return ContactInfo
	 */
	public function setContactInfo($_ContactInfo)
	{
		return ($this->ContactInfo = $_ContactInfo);
	}
	/**
	 * Get ContactInfo
	 * @return SOContactFixerTypeContactInfo
	 */
	public function getContactInfo()
	{
		return $this->ContactInfo;
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOContactFixerTypeError
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