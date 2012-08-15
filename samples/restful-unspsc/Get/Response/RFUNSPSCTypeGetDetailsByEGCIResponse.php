<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByEGCIResponse
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByEGCIResponse
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByEGCIResponse extends RFUNSPSCWsdlClass
{
	/**
	 * The GetDetailsByEGCIResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFUNSPSCTypeArrayOfUNSPSC
	 */
	public $GetDetailsByEGCIResult;
	/**
	 * Constructor
	 * @param RFUNSPSCTypeArrayOfUNSPSC GetDetailsByEGCIResult
	 * @return RFUNSPSCTypeGetDetailsByEGCIResponse
	 */
	public function __construct($_GetDetailsByEGCIResult = null)
	{
		parent::__construct(array('GetDetailsByEGCIResult'=>new RFUNSPSCTypeArrayOfUNSPSC($_GetDetailsByEGCIResult)));
	}
	/**
	 * Set GetDetailsByEGCIResult
	 * @param ArrayOfUNSPSC GetDetailsByEGCIResult
	 * @return ArrayOfUNSPSC
	 */
	public function setGetDetailsByEGCIResult($_GetDetailsByEGCIResult)
	{
		return ($this->GetDetailsByEGCIResult = $_GetDetailsByEGCIResult);
	}
	/**
	 * Get GetDetailsByEGCIResult
	 * @return RFUNSPSCTypeArrayOfUNSPSC
	 */
	public function getGetDetailsByEGCIResult()
	{
		return $this->GetDetailsByEGCIResult;
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