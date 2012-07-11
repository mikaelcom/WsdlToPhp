<?php
/**
 * Class file for XWebOrderStatusTypeResponseOrderStatusType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseOrderStatusType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseOrderStatusType extends XWebOrderStatusWsdlClass
{
	/**
	 * The Header
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderStatusTypeResponseHeaderType
	 */
	public $Header;
	/**
	 * The Detail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebOrderStatusTypeResponseOrderStatusDetailType
	 */
	public $Detail;
	/**
	 * The Summary
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebOrderStatusTypeResponseOrderStatusSummaryType
	 */
	public $Summary;
	/**
	 * Constructor
	 * @param XWebOrderStatusTypeResponseHeaderType Header
	 * @param XWebOrderStatusTypeResponseOrderStatusDetailType Detail
	 * @param XWebOrderStatusTypeResponseOrderStatusSummaryType Summary
	 * @return XWebOrderStatusTypeResponseOrderStatusType
	 */
	public function __construct($_Header,$_Detail = null,$_Summary)
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
	 * @param ResponseOrderStatusDetailType Detail
	 * @return ResponseOrderStatusDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebOrderStatusTypeResponseOrderStatusDetailType
	 */
	public function getDetail()
	{
		return $this->Detail;
	}
	/**
	 * Set Summary
	 * @param ResponseOrderStatusSummaryType Summary
	 * @return ResponseOrderStatusSummaryType
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return XWebOrderStatusTypeResponseOrderStatusSummaryType
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