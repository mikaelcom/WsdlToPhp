<?php
/**
 * Class file for XWebOrderTypeResponseOrderType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeResponseOrderType
 * @date 09/07/2012
 */
class XWebOrderTypeResponseOrderType extends XWebOrderWsdlClass
{
	/**
	 * The Header
	 * @var XWebOrderTypeResponseHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeResponseDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebOrderTypeResponseSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebOrderTypeResponseHeaderType Header
	 * @param XWebOrderTypeResponseDetailType Detail
	 * @param XWebOrderTypeResponseSummaryType Summary
	 * @return XWebOrderTypeResponseOrderType
	 */
	public function __construct($_Header = null,$_Detail = null,$_Summary = null)
	{
		parent::__construct(array('Header'=>$_Header,'Detail'=>$_Detail,'Summary'=>$_Summary));
	}
	/**
	 * Set Header
	 * @param ResponseHeaderType Header
	 * @return ResponseHeaderType
	 */
	public function setHeader($_Header)
	{
		return ($this->Header = $_Header);
	}
	/**
	 * Get Header
	 * @return XWebOrderTypeResponseHeaderType
	 */
	public function getHeader()
	{
		return $this->Header;
	}
	/**
	 * Set Detail
	 * @param ResponseDetailType Detail
	 * @return ResponseDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebOrderTypeResponseDetailType
	 */
	public function getDetail()
	{
		return $this->Detail;
	}
	/**
	 * Set Summary
	 * @param ResponseSummaryType Summary
	 * @return ResponseSummaryType
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return XWebOrderTypeResponseSummaryType
	 */
	public function getSummary()
	{
		return $this->Summary;
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