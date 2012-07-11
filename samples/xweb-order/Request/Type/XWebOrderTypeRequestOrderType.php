<?php
/**
 * Class file for XWebOrderTypeRequestOrderType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestOrderType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestOrderType extends XWebOrderWsdlClass
{
	/**
	 * The Header
	 * @var XWebOrderTypeRequestHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebOrderTypeRequestDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeRequestSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebOrderTypeRequestHeaderType Header
	 * @param XWebOrderTypeRequestDetailType Detail
	 * @param XWebOrderTypeRequestSummaryType Summary
	 * @return XWebOrderTypeRequestOrderType
	 */
	public function __construct($_Header = null,$_Detail = null,$_Summary = null)
	{
		parent::__construct(array('Header'=>$_Header,'Detail'=>$_Detail,'Summary'=>$_Summary));
	}
	/**
	 * Set Header
	 * @param RequestHeaderType Header
	 * @return RequestHeaderType
	 */
	public function setHeader($_Header)
	{
		return ($this->Header = $_Header);
	}
	/**
	 * Get Header
	 * @return XWebOrderTypeRequestHeaderType
	 */
	public function getHeader()
	{
		return $this->Header;
	}
	/**
	 * Set Detail
	 * @param RequestDetailType Detail
	 * @return RequestDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebOrderTypeRequestDetailType
	 */
	public function getDetail()
	{
		return $this->Detail;
	}
	/**
	 * Set Summary
	 * @param RequestSummaryType Summary
	 * @return RequestSummaryType
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return XWebOrderTypeRequestSummaryType
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