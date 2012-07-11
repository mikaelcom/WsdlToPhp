<?php
/**
 * Class file for XWebOrderTypeRequestDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestDetailType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestDetailType extends XWebOrderWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderTypeRequestLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebOrderTypeRequestLineInfoType LineInfo
	 * @return XWebOrderTypeRequestDetailType
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
	 * @return XWebOrderTypeRequestLineInfoType
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