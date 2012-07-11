<?php
/**
 * Class file for EbayTradingTypeMyeBayFavoriteSearchListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyeBayFavoriteSearchListType
 * Documentation : A list of favorite searches a user has saved on the My eBay page.
 * @date 04/07/2012
 */
class EbayTradingTypeMyeBayFavoriteSearchListType extends EbayTradingWsdlClass
{
	/**
	 * The TotalAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of favorite searches saved.
	 * @var int
	 */
	public $TotalAvailable;
	/**
	 * The FavoriteSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A favorite search the user has saved, with a name and a search query.
	 * @var EbayTradingTypeMyeBayFavoriteSearchType
	 */
	public $FavoriteSearch;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int TotalAvailable
	 * @param EbayTradingTypeMyeBayFavoriteSearchType FavoriteSearch
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyeBayFavoriteSearchListType
	 */
	public function __construct($_TotalAvailable = null,$_FavoriteSearch = null,$_any = null)
	{
		parent::__construct(array('TotalAvailable'=>$_TotalAvailable,'FavoriteSearch'=>$_FavoriteSearch,'any'=>$_any));
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
	 * Set FavoriteSearch
	 * @param MyeBayFavoriteSearchType FavoriteSearch
	 * @return MyeBayFavoriteSearchType
	 */
	public function setFavoriteSearch($_FavoriteSearch)
	{
		return ($this->FavoriteSearch = $_FavoriteSearch);
	}
	/**
	 * Get FavoriteSearch
	 * @return EbayTradingTypeMyeBayFavoriteSearchType
	 */
	public function getFavoriteSearch()
	{
		return $this->FavoriteSearch;
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