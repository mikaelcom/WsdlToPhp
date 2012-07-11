<?php
/**
 * Class file for XWebPriceAvailabilityTypeRequestDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeRequestDetailType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeRequestDetailType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceAvailabilityTypeRequestLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebPriceAvailabilityTypeRequestLineInfoType LineInfo
	 * @return XWebPriceAvailabilityTypeRequestDetailType
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
	 * @return XWebPriceAvailabilityTypeRequestLineInfoType
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