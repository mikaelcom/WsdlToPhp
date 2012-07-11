<?php
/**
 * Class file for XiBondsRealTimeTypeGetAccruedInterestResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetAccruedInterestResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetAccruedInterestResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetAccruedInterestResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeAccruedInterest
	 */
	public $GetAccruedInterestResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeAccruedInterest GetAccruedInterestResult
	 * @return XiBondsRealTimeTypeGetAccruedInterestResponse
	 */
	public function __construct($_GetAccruedInterestResult = null)
	{
		parent::__construct(array('GetAccruedInterestResult'=>$_GetAccruedInterestResult));
	}
	/**
	 * Set GetAccruedInterestResult
	 * @param AccruedInterest GetAccruedInterestResult
	 * @return AccruedInterest
	 */
	public function setGetAccruedInterestResult($_GetAccruedInterestResult)
	{
		return ($this->GetAccruedInterestResult = $_GetAccruedInterestResult);
	}
	/**
	 * Get GetAccruedInterestResult
	 * @return XiBondsRealTimeTypeAccruedInterest
	 */
	public function getGetAccruedInterestResult()
	{
		return $this->GetAccruedInterestResult;
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