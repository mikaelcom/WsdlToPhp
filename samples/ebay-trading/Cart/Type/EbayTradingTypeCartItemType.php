<?php
/**
 * Class file for EbayTradingTypeCartItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCartItemType
 * Documentation : Details about an item in a cart.
 * @date 04/07/2012
 */
class EbayTradingTypeCartItemType extends EbayTradingWsdlClass
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : When used as input, this is the item to be added, removed or updated in the cart. Only ItemID and Quantity apply. This is only required as input if the parent container is submitted. When returned, this is one of the items remaining in the cart.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The ReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID created by eBay and returned along with an item, if items are returned. This ID must be provided on input to SetCart along with the corresponding item when doing a Delete or Update related to that item.
	 * @var long
	 */
	public $ReferenceID;
	/**
	 * The Action
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : What is to be done with the item. If the action is Delete or Update, ReferenceID must be provided. (It was returned with the item when the item was initially added to the cart.) This is only required if the parent container is submitted.
	 * @var EbayTradingTypeModifyActionCodeType
	 */
	public $Action;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param long ReferenceID
	 * @param EbayTradingTypeModifyActionCodeType Action
	 * @param DOMDocument any
	 * @return EbayTradingTypeCartItemType
	 */
	public function __construct($_Item = null,$_ReferenceID = null,$_Action = null,$_any = null)
	{
		parent::__construct(array('Item'=>$_Item,'ReferenceID'=>$_ReferenceID,'Action'=>$_Action,'any'=>$_any));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set ReferenceID
	 * @param long ReferenceID
	 * @return long
	 */
	public function setReferenceID($_ReferenceID)
	{
		return ($this->ReferenceID = $_ReferenceID);
	}
	/**
	 * Get ReferenceID
	 * @return long
	 */
	public function getReferenceID()
	{
		return $this->ReferenceID;
	}
	/**
	 * Set Action
	 * @param ModifyActionCodeType Action
	 * @return ModifyActionCodeType
	 */
	public function setAction($_Action)
	{
		return ($this->Action = EbayTradingTypeModifyActionCodeType::valueIsValid($_Action)?$_Action:null);
	}
	/**
	 * Get Action
	 * @return EbayTradingTypeModifyActionCodeType
	 */
	public function getAction()
	{
		return $this->Action;
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