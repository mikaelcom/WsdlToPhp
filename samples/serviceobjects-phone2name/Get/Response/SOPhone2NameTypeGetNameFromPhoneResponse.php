<?php
/**
 * Class file for SOPhone2NameTypeGetNameFromPhoneResponse
 * @date 08/07/2012
 */
/**
 * Class SOPhone2NameTypeGetNameFromPhoneResponse
 * @date 08/07/2012
 */
class SOPhone2NameTypeGetNameFromPhoneResponse extends SOPhone2NameWsdlClass
{
	/**
	 * The GetNameFromPhoneResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhone2NameTypePhone2NameResult
	 */
	public $GetNameFromPhoneResult;
	/**
	 * Constructor
	 * @param SOPhone2NameTypePhone2NameResult GetNameFromPhoneResult
	 * @return SOPhone2NameTypeGetNameFromPhoneResponse
	 */
	public function __construct($_GetNameFromPhoneResult = null)
	{
		parent::__construct(array('GetNameFromPhoneResult'=>$_GetNameFromPhoneResult));
	}
	/**
	 * Set GetNameFromPhoneResult
	 * @param Phone2NameResult GetNameFromPhoneResult
	 * @return Phone2NameResult
	 */
	public function setGetNameFromPhoneResult($_GetNameFromPhoneResult)
	{
		return ($this->GetNameFromPhoneResult = $_GetNameFromPhoneResult);
	}
	/**
	 * Get GetNameFromPhoneResult
	 * @return SOPhone2NameTypePhone2NameResult
	 */
	public function getGetNameFromPhoneResult()
	{
		return $this->GetNameFromPhoneResult;
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