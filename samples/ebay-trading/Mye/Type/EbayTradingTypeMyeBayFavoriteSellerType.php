<?php
/**
 * Class file for EbayTradingTypeMyeBayFavoriteSellerType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyeBayFavoriteSellerType
 * Documentation : Characteristics of the My eBay Favorite Seller.
 * @date 04/07/2012
 */
class EbayTradingTypeMyeBayFavoriteSellerType extends EbayTradingWsdlClass
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The favorite seller's eBay user ID.
	 * @var string
	 */
	public $UserID;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the store owned by the favorite seller, if applicable.
	 * @var string
	 */
	public $StoreName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string UserID
	 * @param string StoreName
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyeBayFavoriteSellerType
	 */
	public function __construct($_UserID = null,$_StoreName = null,$_any = null)
	{
		parent::__construct(array('UserID'=>$_UserID,'StoreName'=>$_StoreName,'any'=>$_any));
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set StoreName
	 * @param string StoreName
	 * @return string
	 */
	public function setStoreName($_StoreName)
	{
		return ($this->StoreName = $_StoreName);
	}
	/**
	 * Get StoreName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->StoreName;
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