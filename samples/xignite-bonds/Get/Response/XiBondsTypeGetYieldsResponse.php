<?php
/**
 * Class file for XiBondsTypeGetYieldsResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetYieldsResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetYieldsResponse extends XiBondsWsdlClass
{
	/**
	 * The GetYieldsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeArrayOfYield
	 */
	public $GetYieldsResult;
	/**
	 * Constructor
	 * @param XiBondsTypeArrayOfYield GetYieldsResult
	 * @return XiBondsTypeGetYieldsResponse
	 */
	public function __construct($_GetYieldsResult = null)
	{
		parent::__construct(array('GetYieldsResult'=>new XiBondsTypeArrayOfYield($_GetYieldsResult)));
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
	 * @return XiBondsTypeArrayOfYield
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