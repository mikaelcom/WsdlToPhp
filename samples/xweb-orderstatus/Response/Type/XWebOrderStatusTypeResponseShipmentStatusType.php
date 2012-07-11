<?php
/**
 * Class file for XWebOrderStatusTypeResponseShipmentStatusType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseShipmentStatusType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseShipmentStatusType extends XWebOrderStatusWsdlClass
{
	/**
	 * The Header
	 * @var XWebOrderStatusTypeResponseHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * @var XWebOrderStatusTypeResponseShipmentStatusDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * @var XWebOrderStatusTypeResponseShipmentStatusSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebOrderStatusTypeResponseHeaderType Header
	 * @param XWebOrderStatusTypeResponseShipmentStatusDetailType Detail
	 * @param XWebOrderStatusTypeResponseShipmentStatusSummaryType Summary
	 * @return XWebOrderStatusTypeResponseShipmentStatusType
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
	 * @return XWebOrderStatusTypeResponseHeaderType
	 */
	public function getHeader()
	{
		return $this->Header;
	}
	/**
	 * Set Detail
	 * @param ResponseShipmentStatusDetailType Detail
	 * @return ResponseShipmentStatusDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebOrderStatusTypeResponseShipmentStatusDetailType
	 */
	public function getDetail()
	{
		return $this->Detail;
	}
	/**
	 * Set Summary
	 * @param ResponseShipmentStatusSummaryType Summary
	 * @return ResponseShipmentStatusSummaryType
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return XWebOrderStatusTypeResponseShipmentStatusSummaryType
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