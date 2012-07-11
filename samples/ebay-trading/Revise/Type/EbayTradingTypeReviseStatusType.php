<?php
/**
 * Class file for EbayTradingTypeReviseStatusType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseStatusType
 * Documentation : Contains data indicating whether an item has been revised since the listing became active and, if so, which among a subset of properties have been changed by the revision. Output only.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseStatusType extends EbayTradingWsdlClass
{
	/**
	 * The ItemRevised
	 * Meta informations :
	 * 	- documentation : If true, indicates the item was revised since the listing became active. Output only.
	 * @var boolean
	 */
	public $ItemRevised;
	/**
	 * The BuyItNowAdded
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that a Buy It Now Price was added for the item. Only applicable to US eBay Motors items. Output only.
	 * @var boolean
	 */
	public $BuyItNowAdded;
	/**
	 * The BuyItNowLowered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the item's Buy It Now price was lowered. Only applicable to US eBay Motors items. Output only.
	 * @var boolean
	 */
	public $BuyItNowLowered;
	/**
	 * The ReserveLowered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the reserve price was lowered for the item. Only applicable to US eBay Motors items. Output only.
	 * @var boolean
	 */
	public $ReserveLowered;
	/**
	 * The ReserveRemoved
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the reserve price was removed from the item. Only applicable to US eBay Motors items. Output only.
	 * @var boolean
	 */
	public $ReserveRemoved;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean ItemRevised
	 * @param boolean BuyItNowAdded
	 * @param boolean BuyItNowLowered
	 * @param boolean ReserveLowered
	 * @param boolean ReserveRemoved
	 * @param DOMDocument any
	 * @return EbayTradingTypeReviseStatusType
	 */
	public function __construct($_ItemRevised = null,$_BuyItNowAdded = null,$_BuyItNowLowered = null,$_ReserveLowered = null,$_ReserveRemoved = null,$_any = null)
	{
		parent::__construct(array('ItemRevised'=>$_ItemRevised,'BuyItNowAdded'=>$_BuyItNowAdded,'BuyItNowLowered'=>$_BuyItNowLowered,'ReserveLowered'=>$_ReserveLowered,'ReserveRemoved'=>$_ReserveRemoved,'any'=>$_any));
	}
	/**
	 * Set ItemRevised
	 * @param boolean ItemRevised
	 * @return boolean
	 */
	public function setItemRevised($_ItemRevised)
	{
		return ($this->ItemRevised = $_ItemRevised);
	}
	/**
	 * Get ItemRevised
	 * @return boolean
	 */
	public function getItemRevised()
	{
		return $this->ItemRevised;
	}
	/**
	 * Set BuyItNowAdded
	 * @param boolean BuyItNowAdded
	 * @return boolean
	 */
	public function setBuyItNowAdded($_BuyItNowAdded)
	{
		return ($this->BuyItNowAdded = $_BuyItNowAdded);
	}
	/**
	 * Get BuyItNowAdded
	 * @return boolean
	 */
	public function getBuyItNowAdded()
	{
		return $this->BuyItNowAdded;
	}
	/**
	 * Set BuyItNowLowered
	 * @param boolean BuyItNowLowered
	 * @return boolean
	 */
	public function setBuyItNowLowered($_BuyItNowLowered)
	{
		return ($this->BuyItNowLowered = $_BuyItNowLowered);
	}
	/**
	 * Get BuyItNowLowered
	 * @return boolean
	 */
	public function getBuyItNowLowered()
	{
		return $this->BuyItNowLowered;
	}
	/**
	 * Set ReserveLowered
	 * @param boolean ReserveLowered
	 * @return boolean
	 */
	public function setReserveLowered($_ReserveLowered)
	{
		return ($this->ReserveLowered = $_ReserveLowered);
	}
	/**
	 * Get ReserveLowered
	 * @return boolean
	 */
	public function getReserveLowered()
	{
		return $this->ReserveLowered;
	}
	/**
	 * Set ReserveRemoved
	 * @param boolean ReserveRemoved
	 * @return boolean
	 */
	public function setReserveRemoved($_ReserveRemoved)
	{
		return ($this->ReserveRemoved = $_ReserveRemoved);
	}
	/**
	 * Get ReserveRemoved
	 * @return boolean
	 */
	public function getReserveRemoved()
	{
		return $this->ReserveRemoved;
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