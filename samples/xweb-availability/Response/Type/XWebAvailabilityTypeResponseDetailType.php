<?php
/**
 * Class file for XWebAvailabilityTypeResponseDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeResponseDetailType
 * @date 09/07/2012
 */
class XWebAvailabilityTypeResponseDetailType extends XWebAvailabilityWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebAvailabilityTypeResponseLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebAvailabilityTypeResponseLineInfoType LineInfo
	 * @return XWebAvailabilityTypeResponseDetailType
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
	 * @return XWebAvailabilityTypeResponseLineInfoType
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