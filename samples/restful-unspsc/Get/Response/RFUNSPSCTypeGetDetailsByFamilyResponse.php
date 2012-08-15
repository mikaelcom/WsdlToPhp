<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByFamilyResponse
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByFamilyResponse
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByFamilyResponse extends RFUNSPSCWsdlClass
{
	/**
	 * The GetDetailsByFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFUNSPSCTypeArrayOfUNSPSC
	 */
	public $GetDetailsByFamilyResult;
	/**
	 * Constructor
	 * @param RFUNSPSCTypeArrayOfUNSPSC GetDetailsByFamilyResult
	 * @return RFUNSPSCTypeGetDetailsByFamilyResponse
	 */
	public function __construct($_GetDetailsByFamilyResult = null)
	{
		parent::__construct(array('GetDetailsByFamilyResult'=>new RFUNSPSCTypeArrayOfUNSPSC($_GetDetailsByFamilyResult)));
	}
	/**
	 * Set GetDetailsByFamilyResult
	 * @param ArrayOfUNSPSC GetDetailsByFamilyResult
	 * @return ArrayOfUNSPSC
	 */
	public function setGetDetailsByFamilyResult($_GetDetailsByFamilyResult)
	{
		return ($this->GetDetailsByFamilyResult = $_GetDetailsByFamilyResult);
	}
	/**
	 * Get GetDetailsByFamilyResult
	 * @return RFUNSPSCTypeArrayOfUNSPSC
	 */
	public function getGetDetailsByFamilyResult()
	{
		return $this->GetDetailsByFamilyResult;
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