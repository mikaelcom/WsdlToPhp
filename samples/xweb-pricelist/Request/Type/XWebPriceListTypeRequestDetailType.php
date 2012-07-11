<?php
/**
 * Class file for XWebPriceListTypeRequestDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeRequestDetailType
 * @date 09/07/2012
 */
class XWebPriceListTypeRequestDetailType extends XWebPriceListWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebPriceListTypeRequestLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebPriceListTypeRequestLineInfoType LineInfo
	 * @return XWebPriceListTypeRequestDetailType
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
	 * @return XWebPriceListTypeRequestLineInfoType
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