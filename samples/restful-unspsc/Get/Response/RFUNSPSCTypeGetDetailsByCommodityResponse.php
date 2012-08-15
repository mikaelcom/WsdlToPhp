<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByCommodityResponse
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByCommodityResponse
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByCommodityResponse extends RFUNSPSCWsdlClass
{
	/**
	 * The GetDetailsByCommodityResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var RFUNSPSCTypeArrayOfUNSPSC
	 */
	public $GetDetailsByCommodityResult;
	/**
	 * Constructor
	 * @param RFUNSPSCTypeArrayOfUNSPSC GetDetailsByCommodityResult
	 * @return RFUNSPSCTypeGetDetailsByCommodityResponse
	 */
	public function __construct($_GetDetailsByCommodityResult = null)
	{
		parent::__construct(array('GetDetailsByCommodityResult'=>new RFUNSPSCTypeArrayOfUNSPSC($_GetDetailsByCommodityResult)));
	}
	/**
	 * Set GetDetailsByCommodityResult
	 * @param ArrayOfUNSPSC GetDetailsByCommodityResult
	 * @return ArrayOfUNSPSC
	 */
	public function setGetDetailsByCommodityResult($_GetDetailsByCommodityResult)
	{
		return ($this->GetDetailsByCommodityResult = $_GetDetailsByCommodityResult);
	}
	/**
	 * Get GetDetailsByCommodityResult
	 * @return RFUNSPSCTypeArrayOfUNSPSC
	 */
	public function getGetDetailsByCommodityResult()
	{
		return $this->GetDetailsByCommodityResult;
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