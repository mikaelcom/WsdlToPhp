<?php
/**
 * Class file for XiBondsTypeGetAccruedInterestsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetAccruedInterestsResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetAccruedInterestsResponse extends XiBondsWsdlClass
{
	/**
	 * The GetAccruedInterestsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfAccruedInterest
	 */
	public $GetAccruedInterestsResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfAccruedInterest GetAccruedInterestsResult
	 * @return XiBondsTypeGetAccruedInterestsResponse
	 */
	public function __construct($_GetAccruedInterestsResult = null)
	{
		parent::__construct(array('GetAccruedInterestsResult'=>new XiBondsTypeArrayOfAccruedInterest($_GetAccruedInterestsResult)));
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
	 * @return XiBondsTypeArrayOfAccruedInterest
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