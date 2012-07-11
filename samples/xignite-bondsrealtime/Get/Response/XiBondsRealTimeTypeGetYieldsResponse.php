<?php
/**
 * Class file for XiBondsRealTimeTypeGetYieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetYieldsResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetYieldsResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetYieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeArrayOfYield
	 */
	public $GetYieldsResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeArrayOfYield GetYieldsResult
	 * @return XiBondsRealTimeTypeGetYieldsResponse
	 */
	public function __construct($_GetYieldsResult = null)
	{
		parent::__construct(array('GetYieldsResult'=>new XiBondsRealTimeTypeArrayOfYield($_GetYieldsResult)));
	}
	/**
	 * Set GetYieldsResult
	 * @param ArrayOfYield GetYieldsResult
	 * @return ArrayOfYield
	 */
	public function setGetYieldsResult($_GetYieldsResult)
	{
		return ($this->GetYieldsResult = $_GetYieldsResult);
	}
	/**
	 * Get GetYieldsResult
	 * @return XiBondsRealTimeTypeArrayOfYield
	 */
	public function getGetYieldsResult()
	{
		return $this->GetYieldsResult;
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