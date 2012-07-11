<?php
/**
 * Class file for EbayTradingTypeInventoryFeesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeInventoryFeesType
 * Documentation : This is used in ReviseInventoryStatus response to provide the set of fees associated with each unique ItemID..
 * @date 04/07/2012
 */
class EbayTradingTypeInventoryFeesType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ItemID of the listing being changed. <br> <br> The ReviseInventoryStatus response includes a separate set of fees for each item that was successfully revised.<br> <br> Use the ItemID to correlate the Fees data with the InventoryStatus data in the response.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Fee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data for one fee (such as name and amount).
	 * @var EbayTradingTypeFeeType
	 */
	public $Fee;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeFeeType Fee
	 * @param DOMDocument any
	 * @return EbayTradingTypeInventoryFeesType
	 */
	public function __construct($_ItemID = null,$_Fee = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'Fee'=>$_Fee,'any'=>$_any));
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
	 * Set Fee
	 * @param FeeType Fee
	 * @return FeeType
	 */
	public function setFee($_Fee)
	{
		return ($this->Fee = $_Fee);
	}
	/**
	 * Get Fee
	 * @return EbayTradingTypeFeeType
	 */
	public function getFee()
	{
		return $this->Fee;
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