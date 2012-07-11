<?php
/**
 * Class file for XWebAvailabilityTypeRequestDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeRequestDetailType
 * @date 09/07/2012
 */
class XWebAvailabilityTypeRequestDetailType extends XWebAvailabilityWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebAvailabilityTypeRequestLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebAvailabilityTypeRequestLineInfoType LineInfo
	 * @return XWebAvailabilityTypeRequestDetailType
	 */
	public function __construct($_LineInfo)
	{
		parent::__construct(array('LineInfo'=>$_LineInfo));
	}
	/**
	 * Set LineInfo
	 * @param RequestLineInfoType LineInfo
	 * @return RequestLineInfoType
	 */
	public function setLineInfo($_LineInfo)
	{
		return ($this->LineInfo = $_LineInfo);
	}
	/**
	 * Get LineInfo
	 * @return XWebAvailabilityTypeRequestLineInfoType
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