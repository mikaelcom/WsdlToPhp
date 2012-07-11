<?php
/**
 * Class file for SOAddressValidateTypeGetPossibleMatchesResponse
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeGetPossibleMatchesResponse
 * @date 05/07/2012
 */
class SOAddressValidateTypeGetPossibleMatchesResponse extends SOAddressValidateWsdlClass
{
	/**
	 * The GetPossibleMatchesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeArrayOfFragmentAddress
	 */
	public $GetPossibleMatchesResult;
	/**
	 * Constructor
	 * @param SOAddressValidateTypeArrayOfFragmentAddress GetPossibleMatchesResult
	 * @return SOAddressValidateTypeGetPossibleMatchesResponse
	 */
	public function __construct($_GetPossibleMatchesResult = null)
	{
		parent::__construct(array('GetPossibleMatchesResult'=>new SOAddressValidateTypeArrayOfFragmentAddress($_GetPossibleMatchesResult)));
	}
	/**
	 * Set GetPossibleMatchesResult
	 * @param ArrayOfFragmentAddress GetPossibleMatchesResult
	 * @return ArrayOfFragmentAddress
	 */
	public function setGetPossibleMatchesResult($_GetPossibleMatchesResult)
	{
		return ($this->GetPossibleMatchesResult = $_GetPossibleMatchesResult);
	}
	/**
	 * Get GetPossibleMatchesResult
	 * @return SOAddressValidateTypeArrayOfFragmentAddress
	 */
	public function getGetPossibleMatchesResult()
	{
		return $this->GetPossibleMatchesResult;
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