<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByClassResponse
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByClassResponse
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByClassResponse extends RFUNSPSCWsdlClass
{
	/**
	 * The GetDetailsByClassResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFUNSPSCTypeArrayOfUNSPSC
	 */
	public $GetDetailsByClassResult;
	/**
	 * Constructor
	 * @param RFUNSPSCTypeArrayOfUNSPSC GetDetailsByClassResult
	 * @return RFUNSPSCTypeGetDetailsByClassResponse
	 */
	public function __construct($_GetDetailsByClassResult = null)
	{
		parent::__construct(array('GetDetailsByClassResult'=>new RFUNSPSCTypeArrayOfUNSPSC($_GetDetailsByClassResult)));
	}
	/**
	 * Set GetDetailsByClassResult
	 * @param ArrayOfUNSPSC GetDetailsByClassResult
	 * @return ArrayOfUNSPSC
	 */
	public function setGetDetailsByClassResult($_GetDetailsByClassResult)
	{
		return ($this->GetDetailsByClassResult = $_GetDetailsByClassResult);
	}
	/**
	 * Get GetDetailsByClassResult
	 * @return RFUNSPSCTypeArrayOfUNSPSC
	 */
	public function getGetDetailsByClassResult()
	{
		return $this->GetDetailsByClassResult;
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