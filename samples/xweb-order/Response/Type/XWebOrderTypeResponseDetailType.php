<?php
/**
 * Class file for XWebOrderTypeResponseDetailType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeResponseDetailType
 * @date 09/07/2012
 */
class XWebOrderTypeResponseDetailType extends XWebOrderWsdlClass
{
	/**
	 * The LineInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderTypeResponseLineInfoType
	 */
	public $LineInfo;
	/**
	 * Constructor
	 * @param XWebOrderTypeResponseLineInfoType LineInfo
	 * @return XWebOrderTypeResponseDetailType
	 */
	public function __construct($_LineInfo = null)
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
	 * @return XWebOrderTypeResponseLineInfoType
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