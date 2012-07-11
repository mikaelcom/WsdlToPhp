<?php
/**
 * Class file for SOBusinessInformationTypeGetBusinessByPhoneResponse
 * @date 08/07/2012
 */
/**
 * Class SOBusinessInformationTypeGetBusinessByPhoneResponse
 * @date 08/07/2012
 */
class SOBusinessInformationTypeGetBusinessByPhoneResponse extends SOBusinessInformationWsdlClass
{
	/**
	 * The GetBusinessByPhoneResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOBusinessInformationTypeBusinessListings
	 */
	public $GetBusinessByPhoneResult;
	/**
	 * Constructor
	 * @param SOBusinessInformationTypeBusinessListings GetBusinessByPhoneResult
	 * @return SOBusinessInformationTypeGetBusinessByPhoneResponse
	 */
	public function __construct($_GetBusinessByPhoneResult = null)
	{
		parent::__construct(array('GetBusinessByPhoneResult'=>$_GetBusinessByPhoneResult));
	}
	/**
	 * Set GetBusinessByPhoneResult
	 * @param BusinessListings GetBusinessByPhoneResult
	 * @return BusinessListings
	 */
	public function setGetBusinessByPhoneResult($_GetBusinessByPhoneResult)
	{
		return ($this->GetBusinessByPhoneResult = $_GetBusinessByPhoneResult);
	}
	/**
	 * Get GetBusinessByPhoneResult
	 * @return SOBusinessInformationTypeBusinessListings
	 */
	public function getGetBusinessByPhoneResult()
	{
		return $this->GetBusinessByPhoneResult;
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