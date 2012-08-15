<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsBySegmentResponse
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsBySegmentResponse
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsBySegmentResponse extends RFUNSPSCWsdlClass
{
	/**
	 * The GetDetailsBySegmentResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFUNSPSCTypeArrayOfUNSPSC
	 */
	public $GetDetailsBySegmentResult;
	/**
	 * Constructor
	 * @param RFUNSPSCTypeArrayOfUNSPSC GetDetailsBySegmentResult
	 * @return RFUNSPSCTypeGetDetailsBySegmentResponse
	 */
	public function __construct($_GetDetailsBySegmentResult = null)
	{
		parent::__construct(array('GetDetailsBySegmentResult'=>new RFUNSPSCTypeArrayOfUNSPSC($_GetDetailsBySegmentResult)));
	}
	/**
	 * Set GetDetailsBySegmentResult
	 * @param ArrayOfUNSPSC GetDetailsBySegmentResult
	 * @return ArrayOfUNSPSC
	 */
	public function setGetDetailsBySegmentResult($_GetDetailsBySegmentResult)
	{
		return ($this->GetDetailsBySegmentResult = $_GetDetailsBySegmentResult);
	}
	/**
	 * Get GetDetailsBySegmentResult
	 * @return RFUNSPSCTypeArrayOfUNSPSC
	 */
	public function getGetDetailsBySegmentResult()
	{
		return $this->GetDetailsBySegmentResult;
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