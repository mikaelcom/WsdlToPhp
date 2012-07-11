<?php
/**
 * Class file for XWebAvailabilityTypeResponseAvailabilityType
 * @date 09/07/2012
 */
/**
 * Class XWebAvailabilityTypeResponseAvailabilityType
 * @date 09/07/2012
 */
class XWebAvailabilityTypeResponseAvailabilityType extends XWebAvailabilityWsdlClass
{
	/**
	 * The Header
	 * @var XWebAvailabilityTypeResponseHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebAvailabilityTypeResponseDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebAvailabilityTypeResponseSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebAvailabilityTypeResponseHeaderType Header
	 * @param XWebAvailabilityTypeResponseDetailType Detail
	 * @param XWebAvailabilityTypeResponseSummaryType Summary
	 * @return XWebAvailabilityTypeResponseAvailabilityType
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
	 * @return XWebAvailabilityTypeResponseHeaderType
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
	 * @return XWebAvailabilityTypeResponseDetailType
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
	 * @return XWebAvailabilityTypeResponseSummaryType
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