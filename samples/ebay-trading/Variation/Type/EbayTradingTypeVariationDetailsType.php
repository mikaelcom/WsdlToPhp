<?php
/**
 * Class file for EbayTradingTypeVariationDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVariationDetailsType
 * Documentation : Details about Variation Specifics validation rules.
 * @date 04/07/2012
 */
class EbayTradingTypeVariationDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The MaxVariationsPerItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of variations the site allows within a multi-variation listing.
	 * @var int
	 */
	public $MaxVariationsPerItem;
	/**
	 * The MaxNamesPerVariationSpecificsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of variation specific names allowed per listing (i.e., within VariationSpecificsSet).
	 * @var int
	 */
	public $MaxNamesPerVariationSpecificsSet;
	/**
	 * The MaxValuesPerVariationSpecificsSetName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of values allowed per listing (i.e., within VariationSpecificsSet).
	 * @var int
	 */
	public $MaxValuesPerVariationSpecificsSetName;
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
	 * @param int MaxVariationsPerItem
	 * @param int MaxNamesPerVariationSpecificsSet
	 * @param int MaxValuesPerVariationSpecificsSetName
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeVariationDetailsType
	 */
	public function __construct($_MaxVariationsPerItem = null,$_MaxNamesPerVariationSpecificsSet = null,$_MaxValuesPerVariationSpecificsSetName = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('MaxVariationsPerItem'=>$_MaxVariationsPerItem,'MaxNamesPerVariationSpecificsSet'=>$_MaxNamesPerVariationSpecificsSet,'MaxValuesPerVariationSpecificsSetName'=>$_MaxValuesPerVariationSpecificsSetName,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set MaxVariationsPerItem
	 * @param int MaxVariationsPerItem
	 * @return int
	 */
	public function setMaxVariationsPerItem($_MaxVariationsPerItem)
	{
		return ($this->MaxVariationsPerItem = $_MaxVariationsPerItem);
	}
	/**
	 * Get MaxVariationsPerItem
	 * @return int
	 */
	public function getMaxVariationsPerItem()
	{
		return $this->MaxVariationsPerItem;
	}
	/**
	 * Set MaxNamesPerVariationSpecificsSet
	 * @param int MaxNamesPerVariationSpecificsSet
	 * @return int
	 */
	public function setMaxNamesPerVariationSpecificsSet($_MaxNamesPerVariationSpecificsSet)
	{
		return ($this->MaxNamesPerVariationSpecificsSet = $_MaxNamesPerVariationSpecificsSet);
	}
	/**
	 * Get MaxNamesPerVariationSpecificsSet
	 * @return int
	 */
	public function getMaxNamesPerVariationSpecificsSet()
	{
		return $this->MaxNamesPerVariationSpecificsSet;
	}
	/**
	 * Set MaxValuesPerVariationSpecificsSetName
	 * @param int MaxValuesPerVariationSpecificsSetName
	 * @return int
	 */
	public function setMaxValuesPerVariationSpecificsSetName($_MaxValuesPerVariationSpecificsSetName)
	{
		return ($this->MaxValuesPerVariationSpecificsSetName = $_MaxValuesPerVariationSpecificsSetName);
	}
	/**
	 * Get MaxValuesPerVariationSpecificsSetName
	 * @return int
	 */
	public function getMaxValuesPerVariationSpecificsSetName()
	{
		return $this->MaxValuesPerVariationSpecificsSetName;
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