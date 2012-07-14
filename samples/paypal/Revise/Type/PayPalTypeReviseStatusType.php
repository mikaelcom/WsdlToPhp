<?php
/**
 * Class file for PayPalTypeReviseStatusType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReviseStatusType
 * Documentation : Contains the revise status information details (e.g., item properties information). ths node contains system set data only - always output and always all data. no minccurs needed, except for motors specific data, since it wil lnot be retruned for non motors items
 * @date 14/07/2012
 */
class PayPalTypeReviseStatusType extends PayPalWsdlClass
{
	/**
	 * The ItemRevised
	 * Meta informations :
	 * 	- documentation : Indicates whether the item was revised since the auction started.
	 * @var boolean
	 */
	public $ItemRevised;
	/**
	 * The BuyItNowAdded
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that a Buy It Now Price was added for the item. Only returned for Motors items.
	 * @var boolean
	 */
	public $BuyItNowAdded;
	/**
	 * The BuyItNowLowered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Replaces BinLowered as of API version 305. If true, indicates that the Buy It Now Price was lowered for the item. Only returned for Motors items.
	 * @var boolean
	 */
	public $BuyItNowLowered;
	/**
	 * The ReserveLowered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the Reserve Price was lowered for the item. Only returned for Motors items.
	 * @var boolean
	 */
	public $ReserveLowered;
	/**
	 * The ReserveRemoved
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the Reserve Price was removed from the item. Only returned for eBay Motors items.
	 * @var boolean
	 */
	public $ReserveRemoved;
	/**
	 * Constructor
	 * @param boolean ItemRevised
	 * @param boolean BuyItNowAdded
	 * @param boolean BuyItNowLowered
	 * @param boolean ReserveLowered
	 * @param boolean ReserveRemoved
	 * @return PayPalTypeReviseStatusType
	 */
	public function __construct($_ItemRevised = null,$_BuyItNowAdded = null,$_BuyItNowLowered = null,$_ReserveLowered = null,$_ReserveRemoved = null)
	{
		parent::__construct(array('ItemRevised'=>$_ItemRevised,'BuyItNowAdded'=>$_BuyItNowAdded,'BuyItNowLowered'=>$_BuyItNowLowered,'ReserveLowered'=>$_ReserveLowered,'ReserveRemoved'=>$_ReserveRemoved));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>