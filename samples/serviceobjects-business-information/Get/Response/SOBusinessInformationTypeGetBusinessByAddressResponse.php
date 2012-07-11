<?php
/**
 * Class file for SOBusinessInformationTypeGetBusinessByAddressResponse
 * @date 08/07/2012
 */
/**
 * Class SOBusinessInformationTypeGetBusinessByAddressResponse
 * @date 08/07/2012
 */
class SOBusinessInformationTypeGetBusinessByAddressResponse extends SOBusinessInformationWsdlClass
{
	/**
	 * The GetBusinessByAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOBusinessInformationTypeBusinessListings
	 */
	public $GetBusinessByAddressResult;
	/**
	 * Constructor
	 * @param SOBusinessInformationTypeBusinessListings GetBusinessByAddressResult
	 * @return SOBusinessInformationTypeGetBusinessByAddressResponse
	 */
	public function __construct($_GetBusinessByAddressResult = null)
	{
		parent::__construct(array('GetBusinessByAddressResult'=>$_GetBusinessByAddressResult));
	}
	/**
	 * Set GetBusinessByAddressResult
	 * @param BusinessListings GetBusinessByAddressResult
	 * @return BusinessListings
	 */
	public function setGetBusinessByAddressResult($_GetBusinessByAddressResult)
	{
		return ($this->GetBusinessByAddressResult = $_GetBusinessByAddressResult);
	}
	/**
	 * Get GetBusinessByAddressResult
	 * @return SOBusinessInformationTypeBusinessListings
	 */
	public function getGetBusinessByAddressResult()
	{
		return $this->GetBusinessByAddressResult;
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