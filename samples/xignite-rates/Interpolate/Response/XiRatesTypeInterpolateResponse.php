<?php
/**
 * Class file for XiRatesTypeInterpolateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeInterpolateResponse
 * @date 08/07/2012
 */
class XiRatesTypeInterpolateResponse extends XiRatesWsdlClass
{
	/**
	 * The InterpolateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeInterpolation
	 */
	public $InterpolateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeInterpolation InterpolateResult
	 * @return XiRatesTypeInterpolateResponse
	 */
	public function __construct($_InterpolateResult = null)
	{
		parent::__construct(array('InterpolateResult'=>$_InterpolateResult));
	}
	/**
	 * Set InterpolateResult
	 * @param Interpolation InterpolateResult
	 * @return Interpolation
	 */
	public function setInterpolateResult($_InterpolateResult)
	{
		return ($this->InterpolateResult = $_InterpolateResult);
	}
	/**
	 * Get InterpolateResult
	 * @return XiRatesTypeInterpolation
	 */
	public function getInterpolateResult()
	{
		return $this->InterpolateResult;
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