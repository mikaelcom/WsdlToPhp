<?php
/**
 * Class file for XWebPriceAvailabilityTypeResponsePriceAvailabilityType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeResponsePriceAvailabilityType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeResponsePriceAvailabilityType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The Header
	 * @var XWebPriceAvailabilityTypeResponseHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebPriceAvailabilityTypeResponseDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebPriceAvailabilityTypeResponseSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebPriceAvailabilityTypeResponseHeaderType Header
	 * @param XWebPriceAvailabilityTypeResponseDetailType Detail
	 * @param XWebPriceAvailabilityTypeResponseSummaryType Summary
	 * @return XWebPriceAvailabilityTypeResponsePriceAvailabilityType
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
	 * @return XWebPriceAvailabilityTypeResponseHeaderType
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
	 * @return XWebPriceAvailabilityTypeResponseDetailType
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
	 * @return XWebPriceAvailabilityTypeResponseSummaryType
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