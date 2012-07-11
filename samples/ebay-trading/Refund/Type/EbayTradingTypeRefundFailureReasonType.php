<?php
/**
 * Class file for EbayTradingTypeRefundFailureReasonType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundFailureReasonType
 * Documentation : A container for the RefundFailureCode.
 * @date 04/07/2012
 */
class EbayTradingTypeRefundFailureReasonType extends EbayTradingWsdlClass
{
	/**
	 * The RefundFailureCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A code indicating the reason why a refund was not issued by the seller.<br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFailureCode values are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @var EbayTradingTypeRefundFailureCodeType
	 */
	public $RefundFailureCode;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeRefundFailureCodeType RefundFailureCode
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundFailureReasonType
	 */
	public function __construct($_RefundFailureCode = null,$_any = null)
	{
		parent::__construct(array('RefundFailureCode'=>$_RefundFailureCode,'any'=>$_any));
	}
	/**
	 * Set RefundFailureCode
	 * @param RefundFailureCodeType RefundFailureCode
	 * @return RefundFailureCodeType
	 */
	public function setRefundFailureCode($_RefundFailureCode)
	{
		return ($this->RefundFailureCode = EbayTradingTypeRefundFailureCodeType::valueIsValid($_RefundFailureCode)?$_RefundFailureCode:null);
	}
	/**
	 * Get RefundFailureCode
	 * @return EbayTradingTypeRefundFailureCodeType
	 */
	public function getRefundFailureCode()
	{
		return $this->RefundFailureCode;
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