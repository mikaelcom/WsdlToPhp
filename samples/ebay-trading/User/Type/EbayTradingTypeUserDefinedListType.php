<?php
/**
 * Class file for EbayTradingTypeUserDefinedListType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUserDefinedListType
 * Documentation : Contains the items, searches and sellers that the user has saved to this list using the "Add to list" feature. The name of the list is given by the "Name" element.
 * @date 04/07/2012
 */
class EbayTradingTypeUserDefinedListType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's chosen name for this list.
	 * @var string
	 */
	public $Name;
	/**
	 * The ItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count's to display Item Added to user defined list
	 * @var int
	 */
	public $ItemCount;
	/**
	 * The FavoriteSellerCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count's to display FavoriteSellerCount added to user defined list
	 * @var int
	 */
	public $FavoriteSellerCount;
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains all items that the user has added to the list named by the element "Name."
	 * @var EbayTradingTypeItemArrayType
	 */
	public $ItemArray;
	/**
	 * The FavoriteSearches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains all searches that the user has added to the list named by the element "Name."
	 * @var EbayTradingTypeMyeBayFavoriteSearchListType
	 */
	public $FavoriteSearches;
	/**
	 * The FavoriteSellers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains all sellers that the user has added to the list named by the element "Name."
	 * @var EbayTradingTypeMyeBayFavoriteSellerListType
	 */
	public $FavoriteSellers;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param int ItemCount
	 * @param int FavoriteSellerCount
	 * @param EbayTradingTypeItemArrayType ItemArray
	 * @param EbayTradingTypeMyeBayFavoriteSearchListType FavoriteSearches
	 * @param EbayTradingTypeMyeBayFavoriteSellerListType FavoriteSellers
	 * @param DOMDocument any
	 * @return EbayTradingTypeUserDefinedListType
	 */
	public function __construct($_Name = null,$_ItemCount = null,$_FavoriteSellerCount = null,$_ItemArray = null,$_FavoriteSearches = null,$_FavoriteSellers = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'ItemCount'=>$_ItemCount,'FavoriteSellerCount'=>$_FavoriteSellerCount,'ItemArray'=>$_ItemArray,'FavoriteSearches'=>$_FavoriteSearches,'FavoriteSellers'=>$_FavoriteSellers,'any'=>$_any));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set ItemCount
	 * @param int ItemCount
	 * @return int
	 */
	public function setItemCount($_ItemCount)
	{
		return ($this->ItemCount = $_ItemCount);
	}
	/**
	 * Get ItemCount
	 * @return int
	 */
	public function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * Set FavoriteSellerCount
	 * @param int FavoriteSellerCount
	 * @return int
	 */
	public function setFavoriteSellerCount($_FavoriteSellerCount)
	{
		return ($this->FavoriteSellerCount = $_FavoriteSellerCount);
	}
	/**
	 * Get FavoriteSellerCount
	 * @return int
	 */
	public function getFavoriteSellerCount()
	{
		return $this->FavoriteSellerCount;
	}
	/**
	 * Set ItemArray
	 * @param ItemArrayType ItemArray
	 * @return ItemArrayType
	 */
	public function setItemArray($_ItemArray)
	{
		return ($this->ItemArray = $_ItemArray);
	}
	/**
	 * Get ItemArray
	 * @return EbayTradingTypeItemArrayType
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * Set FavoriteSearches
	 * @param MyeBayFavoriteSearchListType FavoriteSearches
	 * @return MyeBayFavoriteSearchListType
	 */
	public function setFavoriteSearches($_FavoriteSearches)
	{
		return ($this->FavoriteSearches = $_FavoriteSearches);
	}
	/**
	 * Get FavoriteSearches
	 * @return EbayTradingTypeMyeBayFavoriteSearchListType
	 */
	public function getFavoriteSearches()
	{
		return $this->FavoriteSearches;
	}
	/**
	 * Set FavoriteSellers
	 * @param MyeBayFavoriteSellerListType FavoriteSellers
	 * @return MyeBayFavoriteSellerListType
	 */
	public function setFavoriteSellers($_FavoriteSellers)
	{
		return ($this->FavoriteSellers = $_FavoriteSellers);
	}
	/**
	 * Get FavoriteSellers
	 * @return EbayTradingTypeMyeBayFavoriteSellerListType
	 */
	public function getFavoriteSellers()
	{
		return $this->FavoriteSellers;
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