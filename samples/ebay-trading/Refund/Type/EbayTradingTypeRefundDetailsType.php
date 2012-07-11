<?php
/**
 * Class file for EbayTradingTypeRefundDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundDetailsType
 * Documentation : 
 * @date 04/07/2012
 */
class EbayTradingTypeRefundDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The RefundOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates how the seller will compensate the buyer for a returned item. This value can be passed in the Add/Revise/Relist family of API calls. <br/><br/> <span class="tablenote"><b>Note:</b> Beginning with version 771, listings created, revised, or relisted with deprecated <b>RefundOption</b> and/or <b>ReturnsWithinOption</b> values (using Add/Revise/Relist family of API calls) will start being blocked. <br/><br/> For <b>RefundOption</b>, the deprecated values are <b>MerchandiseCredit</b> and <b>Exchange</b>. Instead of these deprecated values, the seller must offer a <b>MoneyBack</b> or a <b>MoneyBackOrExchange</b> refund option. Consider using the <b>MoneyBackOrExchange</b> option when you have the depth of inventory to support an exchange for a different size, color, or undamaged unit. Otherwise, use the <b>MoneyBack</b> option if you have limited inventory. </span>
	 * @var token
	 */
	public $RefundOption;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Display string that applications can use to present RefundOption in a more user-friendly format (such as in a drop-down list). Not applicable as input to the AddItem family of calls. (Use RefundOption instead.)
	 * @var string
	 */
	public $Description;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param token RefundOption
	 * @param string Description
	 * @param DOMDocument any
	 * @return EbayTradingTypeRefundDetailsType
	 */
	public function __construct($_RefundOption = null,$_Description = null,$_any = null)
	{
		parent::__construct(array('RefundOption'=>$_RefundOption,'Description'=>$_Description,'any'=>$_any));
	}
	/**
	 * Set RefundOption
	 * @param token RefundOption
	 * @return token
	 */
	public function setRefundOption($_RefundOption)
	{
		return ($this->RefundOption = $_RefundOption);
	}
	/**
	 * Get RefundOption
	 * @return token
	 */
	public function getRefundOption()
	{
		return $this->RefundOption;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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