<?php
/**
 * Class file for XWebShipViaTypeRequestShipViaType
 * @date 09/07/2012
 */
/**
 * Class XWebShipViaTypeRequestShipViaType
 * @date 09/07/2012
 */
class XWebShipViaTypeRequestShipViaType extends XWebShipViaWsdlClass
{
	/**
	 * The Header
	 * @var XWebShipViaTypeRequestHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebShipViaTypeRequestDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebShipViaTypeRequestSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebShipViaTypeRequestHeaderType Header
	 * @param XWebShipViaTypeRequestDetailType Detail
	 * @param XWebShipViaTypeRequestSummaryType Summary
	 * @return XWebShipViaTypeRequestShipViaType
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
	 * @return XWebShipViaTypeRequestHeaderType
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
	 * @return XWebShipViaTypeRequestDetailType
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
	 * @return XWebShipViaTypeRequestSummaryType
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