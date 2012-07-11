<?php
/**
 * Class file for XiBondsRealTimeTypeGetAccruedInterestsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetAccruedInterestsResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetAccruedInterestsResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetAccruedInterestsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfAccruedInterest
	 */
	public $GetAccruedInterestsResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfAccruedInterest GetAccruedInterestsResult
	 * @return XiBondsRealTimeTypeGetAccruedInterestsResponse
	 */
	public function __construct($_GetAccruedInterestsResult = null)
	{
		parent::__construct(array('GetAccruedInterestsResult'=>new XiBondsRealTimeTypeArrayOfAccruedInterest($_GetAccruedInterestsResult)));
	}
	/**
	 * Set GetAccruedInterestsResult
	 * @param ArrayOfAccruedInterest GetAccruedInterestsResult
	 * @return ArrayOfAccruedInterest
	 */
	public function setGetAccruedInterestsResult($_GetAccruedInterestsResult)
	{
		return ($this->GetAccruedInterestsResult = $_GetAccruedInterestsResult);
	}
	/**
	 * Get GetAccruedInterestsResult
	 * @return XiBondsRealTimeTypeArrayOfAccruedInterest
	 */
	public function getGetAccruedInterestsResult()
	{
		return $this->GetAccruedInterestsResult;
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