<?php
/**
 * Class file for XiBondsTypeGetAccruedInterestResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetAccruedInterestResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetAccruedInterestResponse extends XiBondsWsdlClass
{
	/**
	 * The GetAccruedInterestResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeAccruedInterest
	 */
	public $GetAccruedInterestResult;
	/**
	 * Constructor
	 * @param XiBondsTypeAccruedInterest GetAccruedInterestResult
	 * @return XiBondsTypeGetAccruedInterestResponse
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
	 * @return XiBondsTypeAccruedInterest
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