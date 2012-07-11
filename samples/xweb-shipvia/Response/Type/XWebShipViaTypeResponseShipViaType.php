<?php
/**
 * Class file for XWebShipViaTypeResponseShipViaType
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeResponseShipViaType
 * @date 09/07/2012
 */
class XWebShipViaTypeResponseShipViaType extends XWebShipViaWsdlClass
{
	/**
	 * The Header
	 * @var XWebShipViaTypeResponseHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebShipViaTypeResponseDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebShipViaTypeResponseSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebShipViaTypeResponseHeaderType Header
	 * @param XWebShipViaTypeResponseDetailType Detail
	 * @param XWebShipViaTypeResponseSummaryType Summary
	 * @return XWebShipViaTypeResponseShipViaType
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
	 * @return XWebShipViaTypeResponseHeaderType
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
	 * @return XWebShipViaTypeResponseDetailType
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
	 * @return XWebShipViaTypeResponseSummaryType
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