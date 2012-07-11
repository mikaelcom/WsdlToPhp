<?php
/**
 * Class file for XWebPriceListTypeResponseDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeResponseDetailType
 * @date 09/07/2012
 */
class XWebPriceListTypeResponseDetailType extends XWebPriceListWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceListTypeResponseLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebPriceListTypeResponseLineInfoType LineInfo
	 * @return XWebPriceListTypeResponseDetailType
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
	 * @return XWebPriceListTypeResponseLineInfoType
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