<?php
/**
 * Class file for EbayTradingTypeUnpaidItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnpaidItemType
 * Documentation : Contains details pertaining Unpaid Item Case
 * @date 04/07/2012
 */
class EbayTradingTypeUnpaidItemType extends EbayTradingWsdlClass
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Expected release date.
	 * @var EbayTradingTypeUnpaidItemCaseStatusTypeCodeType
	 */
	public $Status;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of Unpaid Item Case.
	 * @var EbayTradingTypeUnpaidItemCaseOpenTypeCodeType
	 */
	public $Type;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeUnpaidItemCaseStatusTypeCodeType Status
	 * @param EbayTradingTypeUnpaidItemCaseOpenTypeCodeType Type
	 * @param DOMDocument any
	 * @return EbayTradingTypeUnpaidItemType
	 */
	public function __construct($_Status = null,$_Type = null,$_any = null)
	{
		parent::__construct(array('Status'=>$_Status,'Type'=>$_Type,'any'=>$_any));
	}
	/**
	 * Set Status
	 * @param UnpaidItemCaseStatusTypeCodeType Status
	 * @return UnpaidItemCaseStatusTypeCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypeUnpaidItemCaseStatusTypeCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypeUnpaidItemCaseStatusTypeCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Type
	 * @param UnpaidItemCaseOpenTypeCodeType Type
	 * @return UnpaidItemCaseOpenTypeCodeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = EbayTradingTypeUnpaidItemCaseOpenTypeCodeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return EbayTradingTypeUnpaidItemCaseOpenTypeCodeType
	 */
	public function getType()
	{
		return $this->Type;
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