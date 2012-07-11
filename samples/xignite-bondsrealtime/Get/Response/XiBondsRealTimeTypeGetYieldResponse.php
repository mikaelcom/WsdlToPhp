<?php
/**
 * Class file for XiBondsRealTimeTypeGetYieldResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetYieldResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetYieldResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetYieldResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeYield
	 */
	public $GetYieldResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeYield GetYieldResult
	 * @return XiBondsRealTimeTypeGetYieldResponse
	 */
	public function __construct($_GetYieldResult = null)
	{
		parent::__construct(array('GetYieldResult'=>$_GetYieldResult));
	}
	/**
	 * Set GetYieldResult
	 * @param Yield GetYieldResult
	 * @return Yield
	 */
	public function setGetYieldResult($_GetYieldResult)
	{
		return ($this->GetYieldResult = $_GetYieldResult);
	}
	/**
	 * Get GetYieldResult
	 * @return XiBondsRealTimeTypeYield
	 */
	public function getGetYieldResult()
	{
		return $this->GetYieldResult;
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