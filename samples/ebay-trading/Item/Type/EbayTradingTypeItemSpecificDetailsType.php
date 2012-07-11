<?php
/**
 * Class file for EbayTradingTypeItemSpecificDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemSpecificDetailsType
 * Documentation : Details about custom Item Specifics validation rules.
 * @date 04/07/2012
 */
class EbayTradingTypeItemSpecificDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The MaxItemSpecificsPerItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of custom Item Specifics allowed when you list an item. Also the maximum returned per category in GetCategorySpecifics and GetItemRecommendations. <br> <br> Related fields:<br> Item.ItemSpecifics in AddItem<br> ItemSpecifics in GetCategorySpecifics<br> ItemSpecifics in GetItemRecommendations<br>
	 * @var int
	 */
	public $MaxItemSpecificsPerItem;
	/**
	 * The MaxValuesPerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of values returned for each custom Item Specific in GetCategorySpecifics and GetItemRecommendations.<br> <br> Related fields:<br> ItemSpecifics in GetCategorySpecifics<br> ItemSpecifics in GetItemRecommendations<br>
	 * @var int
	 */
	public $MaxValuesPerName;
	/**
	 * The MaxCharactersPerValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of characters the site supports per custom Item Specific value.<br> <br> Related fields:<br> Item.ItemSpecifics in AddItem<br> ItemSpecifics in GetCategorySpecifics<br> ItemSpecifics in GetItemRecommendations<br>
	 * @var int
	 */
	public $MaxCharactersPerValue;
	/**
	 * The MaxCharactersPerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of characters the site supports per custom Item Specific name.<br> <br> Related fields:<br> Item.ItemSpecifics in AddItem<br> ItemSpecifics in GetCategorySpecifics<br> ItemSpecifics in GetItemRecommendations<br>
	 * @var int
	 */
	public $MaxCharactersPerName;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int MaxItemSpecificsPerItem
	 * @param int MaxValuesPerName
	 * @param int MaxCharactersPerValue
	 * @param int MaxCharactersPerName
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemSpecificDetailsType
	 */
	public function __construct($_MaxItemSpecificsPerItem = null,$_MaxValuesPerName = null,$_MaxCharactersPerValue = null,$_MaxCharactersPerName = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('MaxItemSpecificsPerItem'=>$_MaxItemSpecificsPerItem,'MaxValuesPerName'=>$_MaxValuesPerName,'MaxCharactersPerValue'=>$_MaxCharactersPerValue,'MaxCharactersPerName'=>$_MaxCharactersPerName,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set MaxItemSpecificsPerItem
	 * @param int MaxItemSpecificsPerItem
	 * @return int
	 */
	public function setMaxItemSpecificsPerItem($_MaxItemSpecificsPerItem)
	{
		return ($this->MaxItemSpecificsPerItem = $_MaxItemSpecificsPerItem);
	}
	/**
	 * Get MaxItemSpecificsPerItem
	 * @return int
	 */
	public function getMaxItemSpecificsPerItem()
	{
		return $this->MaxItemSpecificsPerItem;
	}
	/**
	 * Set MaxValuesPerName
	 * @param int MaxValuesPerName
	 * @return int
	 */
	public function setMaxValuesPerName($_MaxValuesPerName)
	{
		return ($this->MaxValuesPerName = $_MaxValuesPerName);
	}
	/**
	 * Get MaxValuesPerName
	 * @return int
	 */
	public function getMaxValuesPerName()
	{
		return $this->MaxValuesPerName;
	}
	/**
	 * Set MaxCharactersPerValue
	 * @param int MaxCharactersPerValue
	 * @return int
	 */
	public function setMaxCharactersPerValue($_MaxCharactersPerValue)
	{
		return ($this->MaxCharactersPerValue = $_MaxCharactersPerValue);
	}
	/**
	 * Get MaxCharactersPerValue
	 * @return int
	 */
	public function getMaxCharactersPerValue()
	{
		return $this->MaxCharactersPerValue;
	}
	/**
	 * Set MaxCharactersPerName
	 * @param int MaxCharactersPerName
	 * @return int
	 */
	public function setMaxCharactersPerName($_MaxCharactersPerName)
	{
		return ($this->MaxCharactersPerName = $_MaxCharactersPerName);
	}
	/**
	 * Get MaxCharactersPerName
	 * @return int
	 */
	public function getMaxCharactersPerName()
	{
		return $this->MaxCharactersPerName;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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