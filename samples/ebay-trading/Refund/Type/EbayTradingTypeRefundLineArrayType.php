<?php
/**
 * Class file for EbayTradingTypeRefundLineArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundLineArrayType
 * Documentation : Container consisting of one or more RefundLine fields.
 * @date 04/07/2012
 */
class EbayTradingTypeRefundLineArrayType extends EbayTradingWsdlClass
{
	/**
	 * The RefundLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This field indicates the type and amount of the refund to the buyer involved in an DE/AT order order subject to the new eBay payment process. The <strong>type</strong> attribute indicates whether the refund is being applied against the purchase price or the shipping price. Using the <strong>issueRefund</strong> call of the Order Adjustment API, the seller can also issue an optional/additional refund that does not apply to the purchase price or shipping price. The <strong>type</strong> values are defined in the <strong>RefundLineTypeCodeType</strong> enumeration type.<br/><br/> <br/><br/> <strong>RefundLine</strong> fields will only be returned if a refund has been issued from the seller to the buyer for a DE/AT order going through the new eBay payment process.
	 * @var EbayTradingTypeRefundLineType
	 */
	public $RefundLine;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeRefundLineType RefundLine
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundLineArrayType
	 */
	public function __construct($_RefundLine = null,$_any = null)
	{
		parent::__construct(array('RefundLine'=>$_RefundLine,'any'=>$_any));
	}
	/**
	 * Set RefundLine
	 * @param RefundLineType RefundLine
	 * @return RefundLineType
	 */
	public function setRefundLine($_RefundLine)
	{
		return ($this->RefundLine = $_RefundLine);
	}
	/**
	 * Get RefundLine
	 * @return EbayTradingTypeRefundLineType
	 */
	public function getRefundLine()
	{
		return $this->RefundLine;
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