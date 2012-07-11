<?php
/**
 * Class file for EbayTradingTypeRefundFundingSourceArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundFundingSourceArrayType
 * Documentation : Container consisting of one or more RefundFundingSource containers.
 * @date 04/07/2012
 */
class EbayTradingTypeRefundFundingSourceArrayType extends EbayTradingWsdlClass
{
	/**
	 * The RefundFundingSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The funding sources for the refund.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFundingSource containers are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var EbayTradingTypeRefundFundingSourceType
	 */
	public $RefundFundingSource;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeRefundFundingSourceType RefundFundingSource
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundFundingSourceArrayType
	 */
	public function __construct($_RefundFundingSource = null,$_any = null)
	{
		parent::__construct(array('RefundFundingSource'=>$_RefundFundingSource,'any'=>$_any));
	}
	/**
	 * Set RefundFundingSource
	 * @param RefundFundingSourceType RefundFundingSource
	 * @return RefundFundingSourceType
	 */
	public function setRefundFundingSource($_RefundFundingSource)
	{
		return ($this->RefundFundingSource = $_RefundFundingSource);
	}
	/**
	 * Get RefundFundingSource
	 * @return EbayTradingTypeRefundFundingSourceType
	 */
	public function getRefundFundingSource()
	{
		return $this->RefundFundingSource;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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