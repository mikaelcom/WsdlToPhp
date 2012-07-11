<?php
/**
 * Class file for XWebAvailabilityTypeRequestAvailabilityType
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeRequestAvailabilityType
 * @date 09/07/2012
 */
class XWebAvailabilityTypeRequestAvailabilityType extends XWebAvailabilityWsdlClass
{
	/**
	 * The Header
	 * @var XWebAvailabilityTypeRequestHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebAvailabilityTypeRequestDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebAvailabilityTypeRequestSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebAvailabilityTypeRequestHeaderType Header
	 * @param XWebAvailabilityTypeRequestDetailType Detail
	 * @param XWebAvailabilityTypeRequestSummaryType Summary
	 * @return XWebAvailabilityTypeRequestAvailabilityType
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
	 * @return XWebAvailabilityTypeRequestHeaderType
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
	 * @return XWebAvailabilityTypeRequestDetailType
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
	 * @return XWebAvailabilityTypeRequestSummaryType
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