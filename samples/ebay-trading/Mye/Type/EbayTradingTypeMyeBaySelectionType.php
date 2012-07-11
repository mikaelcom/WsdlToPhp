<?php
/**
 * Class file for EbayTradingTypeMyeBaySelectionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyeBaySelectionType
 * Documentation : Specifies how to return the result list for My eBay features such as saved searches, favorite sellers, and second chance offers.
 * @date 04/07/2012
 */
class EbayTradingTypeMyeBaySelectionType extends EbayTradingWsdlClass
{
	/**
	 * The Include
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to include the container in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
	 * @var boolean
	 */
	public $Include;
	/**
	 * The IncludeItemCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to include the item count in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
	 * @var boolean
	 */
	public $IncludeItemCount;
	/**
	 * The IncludeFavoriteSellerCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to include FavoriteSellerCount in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
	 * @var boolean
	 */
	public $IncludeFavoriteSellerCount;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the sort order of the result. Default is Ascending.
	 * @var EbayTradingTypeSortOrderCodeType
	 */
	public $Sort;
	/**
	 * The MaxResults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of items in the returned list. If not specified, returns all items in the list.
	 * @var int
	 */
	public $MaxResults;
	/**
	 * The UserDefinedListName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies that only the user defined list whose name matches the given name should be in the returned list. If the user does not have a matching record, no data is returned. If this element is omitted, the information for all records is returned. For use only within the UserDefinedLists element.
	 * @var string
	 */
	public $UserDefinedListName;
	/**
	 * The IncludeListContents
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify true to return the full user defined list contents in the response's UserDefinedList containers. A value of false means only a summary of the user defined list will be returned. The default value is false.
	 * @var boolean
	 */
	public $IncludeListContents;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean Include
	 * @param boolean IncludeItemCount
	 * @param boolean IncludeFavoriteSellerCount
	 * @param EbayTradingTypeSortOrderCodeType Sort
	 * @param int MaxResults
	 * @param string UserDefinedListName
	 * @param boolean IncludeListContents
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyeBaySelectionType
	 */
	public function __construct($_Include = null,$_IncludeItemCount = null,$_IncludeFavoriteSellerCount = null,$_Sort = null,$_MaxResults = null,$_UserDefinedListName = null,$_IncludeListContents = null,$_any = null)
	{
		parent::__construct(array('Include'=>$_Include,'IncludeItemCount'=>$_IncludeItemCount,'IncludeFavoriteSellerCount'=>$_IncludeFavoriteSellerCount,'Sort'=>$_Sort,'MaxResults'=>$_MaxResults,'UserDefinedListName'=>$_UserDefinedListName,'IncludeListContents'=>$_IncludeListContents,'any'=>$_any));
	}
	/**
	 * Set Include
	 * @param boolean Include
	 * @return boolean
	 */
	public function setInclude($_Include)
	{
		return ($this->Include = $_Include);
	}
	/**
	 * Get Include
	 * @return boolean
	 */
	public function getInclude()
	{
		return $this->Include;
	}
	/**
	 * Set IncludeItemCount
	 * @param boolean IncludeItemCount
	 * @return boolean
	 */
	public function setIncludeItemCount($_IncludeItemCount)
	{
		return ($this->IncludeItemCount = $_IncludeItemCount);
	}
	/**
	 * Get IncludeItemCount
	 * @return boolean
	 */
	public function getIncludeItemCount()
	{
		return $this->IncludeItemCount;
	}
	/**
	 * Set IncludeFavoriteSellerCount
	 * @param boolean IncludeFavoriteSellerCount
	 * @return boolean
	 */
	public function setIncludeFavoriteSellerCount($_IncludeFavoriteSellerCount)
	{
		return ($this->IncludeFavoriteSellerCount = $_IncludeFavoriteSellerCount);
	}
	/**
	 * Get IncludeFavoriteSellerCount
	 * @return boolean
	 */
	public function getIncludeFavoriteSellerCount()
	{
		return $this->IncludeFavoriteSellerCount;
	}
	/**
	 * Set Sort
	 * @param SortOrderCodeType Sort
	 * @return SortOrderCodeType
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = EbayTradingTypeSortOrderCodeType::valueIsValid($_Sort)?$_Sort:null);
	}
	/**
	 * Get Sort
	 * @return EbayTradingTypeSortOrderCodeType
	 */
	public function getSort()
	{
		return $this->Sort;
	}
	/**
	 * Set MaxResults
	 * @param int MaxResults
	 * @return int
	 */
	public function setMaxResults($_MaxResults)
	{
		return ($this->MaxResults = $_MaxResults);
	}
	/**
	 * Get MaxResults
	 * @return int
	 */
	public function getMaxResults()
	{
		return $this->MaxResults;
	}
	/**
	 * Set UserDefinedListName
	 * @param string UserDefinedListName
	 * @return string
	 */
	public function setUserDefinedListName($_UserDefinedListName)
	{
		return ($this->UserDefinedListName = $_UserDefinedListName);
	}
	/**
	 * Get UserDefinedListName
	 * @return string
	 */
	public function getUserDefinedListName()
	{
		return $this->UserDefinedListName;
	}
	/**
	 * Set IncludeListContents
	 * @param boolean IncludeListContents
	 * @return boolean
	 */
	public function setIncludeListContents($_IncludeListContents)
	{
		return ($this->IncludeListContents = $_IncludeListContents);
	}
	/**
	 * Get IncludeListContents
	 * @return boolean
	 */
	public function getIncludeListContents()
	{
		return $this->IncludeListContents;
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