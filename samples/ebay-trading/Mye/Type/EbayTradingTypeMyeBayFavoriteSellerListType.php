<?php
/**
 * Class file for EbayTradingTypeMyeBayFavoriteSellerListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyeBayFavoriteSellerListType
 * Documentation : A list of favorite sellers the user has saved on the My eBay page.
 * @date 04/07/2012
 */
class EbayTradingTypeMyeBayFavoriteSellerListType extends EbayTradingWsdlClass
{
	/**
	 * The TotalAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of favorite sellers saved.
	 * @var int
	 */
	public $TotalAvailable;
	/**
	 * The FavoriteSeller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A favorite seller the user has saved, with a user ID and store name.
	 * @var EbayTradingTypeMyeBayFavoriteSellerType
	 */
	public $FavoriteSeller;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int TotalAvailable
	 * @param EbayTradingTypeMyeBayFavoriteSellerType FavoriteSeller
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyeBayFavoriteSellerListType
	 */
	public function __construct($_TotalAvailable = null,$_FavoriteSeller = null,$_any = null)
	{
		parent::__construct(array('TotalAvailable'=>$_TotalAvailable,'FavoriteSeller'=>$_FavoriteSeller,'any'=>$_any));
	}
	/**
	 * Set TotalAvailable
	 * @param int TotalAvailable
	 * @return int
	 */
	public function setTotalAvailable($_TotalAvailable)
	{
		return ($this->TotalAvailable = $_TotalAvailable);
	}
	/**
	 * Get TotalAvailable
	 * @return int
	 */
	public function getTotalAvailable()
	{
		return $this->TotalAvailable;
	}
	/**
	 * Set FavoriteSeller
	 * @param MyeBayFavoriteSellerType FavoriteSeller
	 * @return MyeBayFavoriteSellerType
	 */
	public function setFavoriteSeller($_FavoriteSeller)
	{
		return ($this->FavoriteSeller = $_FavoriteSeller);
	}
	/**
	 * Get FavoriteSeller
	 * @return EbayTradingTypeMyeBayFavoriteSellerType
	 */
	public function getFavoriteSeller()
	{
		return $this->FavoriteSeller;
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