<?php
/**
 * Class file for XiRatesTypeInterpolation
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeInterpolation
 * @date 08/07/2012
 */
class XiRatesTypeInterpolation extends XiRatesTypeCommon
{
	/**
	 * The XValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfInt
	 */
	public $XValues;
	/**
	 * The YValues
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfDouble
	 */
	public $YValues;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfInt XValues
	 * @param XiRatesTypeArrayOfDouble YValues
	 * @return XiRatesTypeInterpolation
	 */
	public function __construct($_XValues = null,$_YValues = null)
	{
		XiRatesWsdlClass::__construct(array('XValues'=>new XiRatesTypeArrayOfInt($_XValues),'YValues'=>new XiRatesTypeArrayOfDouble($_YValues)));
	}
	/**
	 * Set XValues
	 * @param ArrayOfInt XValues
	 * @return ArrayOfInt
	 */
	public function setXValues($_XValues)
	{
		return ($this->XValues = $_XValues);
	}
	/**
	 * Get XValues
	 * @return XiRatesTypeArrayOfInt
	 */
	public function getXValues()
	{
		return $this->XValues;
	}
	/**
	 * Set YValues
	 * @param ArrayOfDouble YValues
	 * @return ArrayOfDouble
	 */
	public function setYValues($_YValues)
	{
		return ($this->YValues = $_YValues);
	}
	/**
	 * Get YValues
	 * @return XiRatesTypeArrayOfDouble
	 */
	public function getYValues()
	{
		return $this->YValues;
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