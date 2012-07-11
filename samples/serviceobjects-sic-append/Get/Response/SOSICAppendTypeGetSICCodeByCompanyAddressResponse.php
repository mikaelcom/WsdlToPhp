<?php
/**
 * Class file for SOSICAppendTypeGetSICCodeByCompanyAddressResponse
 * @date 08/07/2012
 */
/**
 * Class SOSICAppendTypeGetSICCodeByCompanyAddressResponse
 * @date 08/07/2012
 */
class SOSICAppendTypeGetSICCodeByCompanyAddressResponse extends SOSICAppendWsdlClass
{
	/**
	 * The GetSICCodeByCompanyAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOSICAppendTypeArrayOfSICAppendResponse
	 */
	public $GetSICCodeByCompanyAddressResult;
	/**
	 * Constructor
	 * @param SOSICAppendTypeArrayOfSICAppendResponse GetSICCodeByCompanyAddressResult
	 * @return SOSICAppendTypeGetSICCodeByCompanyAddressResponse
	 */
	public function __construct($_GetSICCodeByCompanyAddressResult = null)
	{
		parent::__construct(array('GetSICCodeByCompanyAddressResult'=>new SOSICAppendTypeArrayOfSICAppendResponse($_GetSICCodeByCompanyAddressResult)));
	}
	/**
	 * Set GetSICCodeByCompanyAddressResult
	 * @param ArrayOfSICAppendResponse GetSICCodeByCompanyAddressResult
	 * @return ArrayOfSICAppendResponse
	 */
	public function setGetSICCodeByCompanyAddressResult($_GetSICCodeByCompanyAddressResult)
	{
		return ($this->GetSICCodeByCompanyAddressResult = $_GetSICCodeByCompanyAddressResult);
	}
	/**
	 * Get GetSICCodeByCompanyAddressResult
	 * @return SOSICAppendTypeArrayOfSICAppendResponse
	 */
	public function getGetSICCodeByCompanyAddressResult()
	{
		return $this->GetSICCodeByCompanyAddressResult;
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