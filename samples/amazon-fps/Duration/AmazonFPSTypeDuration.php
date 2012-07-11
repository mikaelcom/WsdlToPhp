<?php
/**
 * Class file for AmazonFPSTypeDuration
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeDuration
 * @date 10/07/2012
 */
class AmazonFPSTypeDuration extends AmazonFPSWsdlClass
{
	/**
	 * The Value
	 * @var integer
	 */
	public $Value;
	/**
	 * The TimeUnit
	 * @var AmazonFPSTypeTimeUnit
	 */
	public $TimeUnit;
	/**
	 * Constructor
	 * @param integer Value
	 * @param AmazonFPSTypeTimeUnit TimeUnit
	 * @return AmazonFPSTypeDuration
	 */
	public function __construct($_Value = null,$_TimeUnit = null)
	{
		parent::__construct(array('Value'=>$_Value,'TimeUnit'=>$_TimeUnit));
	}
	/**
	 * Set Value
	 * @param integer Value
	 * @return integer
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return integer
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set TimeUnit
	 * @param TimeUnit TimeUnit
	 * @return TimeUnit
	 */
	public function setTimeUnit($_TimeUnit)
	{
		return ($this->TimeUnit = AmazonFPSTypeTimeUnit::valueIsValid($_TimeUnit)?$_TimeUnit:null);
	}
	/**
	 * Get TimeUnit
	 * @return AmazonFPSTypeTimeUnit
	 */
	public function getTimeUnit()
	{
		return $this->TimeUnit;
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