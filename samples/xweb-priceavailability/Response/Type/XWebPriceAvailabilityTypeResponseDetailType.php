<?php
/**
 * Class file for XWebPriceAvailabilityTypeResponseDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeResponseDetailType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeResponseDetailType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceAvailabilityTypeResponseLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebPriceAvailabilityTypeResponseLineInfoType LineInfo
	 * @return XWebPriceAvailabilityTypeResponseDetailType
	 */
	public function __construct($_LineInfo)
	{
		parent::__construct(array('LineInfo'=>$_LineInfo));
	}
	/**
	 * Set LineInfo
	 * @param ResponseLineInfoType LineInfo
	 * @return ResponseLineInfoType
	 */
	public function setLineInfo($_LineInfo)
	{
		return ($this->LineInfo = $_LineInfo);
	}
	/**
	 * Get LineInfo
	 * @return XWebPriceAvailabilityTypeResponseLineInfoType
	 */
	public function getLineInfo()
	{
		return $this->LineInfo;
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