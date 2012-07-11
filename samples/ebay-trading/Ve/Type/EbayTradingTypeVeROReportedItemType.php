<?php
/**
 * Class file for EbayTradingTypeVeROReportedItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReportedItemType
 * Documentation : A container for item and VeROReportedItem's.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReportedItemType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item ID of the item reported for infringment.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The ItemStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The VeRO reporting status for a given item.
	 * @var EbayTradingTypeVeROItemStatusCodeType
	 */
	public $ItemStatus;
	/**
	 * The ItemReasonForFailure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The explanation entered by eBay when an item reported for infringement is given a status of SubmissionFailed or ClarificationRequired.
	 * @var string
	 */
	public $ItemReasonForFailure;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeVeROItemStatusCodeType ItemStatus
	 * @param string ItemReasonForFailure
	 * @param DOMDocument any
	 * @return EbayTradingTypeVeROReportedItemType
	 */
	public function __construct($_ItemID = null,$_ItemStatus = null,$_ItemReasonForFailure = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'ItemStatus'=>$_ItemStatus,'ItemReasonForFailure'=>$_ItemReasonForFailure,'any'=>$_any));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set ItemStatus
	 * @param VeROItemStatusCodeType ItemStatus
	 * @return VeROItemStatusCodeType
	 */
	public function setItemStatus($_ItemStatus)
	{
		return ($this->ItemStatus = EbayTradingTypeVeROItemStatusCodeType::valueIsValid($_ItemStatus)?$_ItemStatus:null);
	}
	/**
	 * Get ItemStatus
	 * @return EbayTradingTypeVeROItemStatusCodeType
	 */
	public function getItemStatus()
	{
		return $this->ItemStatus;
	}
	/**
	 * Set ItemReasonForFailure
	 * @param string ItemReasonForFailure
	 * @return string
	 */
	public function setItemReasonForFailure($_ItemReasonForFailure)
	{
		return ($this->ItemReasonForFailure = $_ItemReasonForFailure);
	}
	/**
	 * Get ItemReasonForFailure
	 * @return string
	 */
	public function getItemReasonForFailure()
	{
		return $this->ItemReasonForFailure;
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