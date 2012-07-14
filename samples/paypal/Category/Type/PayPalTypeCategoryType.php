<?php
/**
 * Class file for PayPalTypeCategoryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCategoryType
 * Documentation : Container for data on the primary category of listing.
 * @date 14/07/2012
 */
class PayPalTypeCategoryType extends PayPalWsdlClass
{
	/**
	 * The AutoPayEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $AutoPayEnabled;
	/**
	 * The B2BVATEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $B2BVATEnabled;
	/**
	 * The CatalogEnabled
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $CatalogEnabled;
	/**
	 * The CategoryID
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The CategoryLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var int
	 */
	public $CategoryLevel;
	/**
	 * The CategoryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CategoryName;
	/**
	 * The CategoryParentID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $CategoryParentID;
	/**
	 * The CategoryParentName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $CategoryParentName;
	/**
	 * The CSIDList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : CSIDList is not present if Attributes enabled.
	 * @var string
	 */
	public $CSIDList;
	/**
	 * The Expired
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $Expired;
	/**
	 * The IntlAutosFixedCat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IntlAutosFixedCat;
	/**
	 * The LeafCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $LeafCategory;
	/**
	 * The Virtual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $Virtual;
	/**
	 * Constructor
	 * @param boolean AutoPayEnabled
	 * @param boolean B2BVATEnabled
	 * @param boolean CatalogEnabled
	 * @param string CategoryID
	 * @param int CategoryLevel
	 * @param string CategoryName
	 * @param string CategoryParentID
	 * @param string CategoryParentName
	 * @param string CSIDList
	 * @param boolean Expired
	 * @param boolean IntlAutosFixedCat
	 * @param boolean LeafCategory
	 * @param boolean Virtual
	 * @return PayPalTypeCategoryType
	 */
	public function __construct($_AutoPayEnabled = null,$_B2BVATEnabled = null,$_CatalogEnabled = null,$_CategoryID = null,$_CategoryLevel = null,$_CategoryName = null,$_CategoryParentID = null,$_CategoryParentName = null,$_CSIDList = null,$_Expired = null,$_IntlAutosFixedCat = null,$_LeafCategory = null,$_Virtual = null)
	{
		parent::__construct(array('AutoPayEnabled'=>$_AutoPayEnabled,'B2BVATEnabled'=>$_B2BVATEnabled,'CatalogEnabled'=>$_CatalogEnabled,'CategoryID'=>$_CategoryID,'CategoryLevel'=>$_CategoryLevel,'CategoryName'=>$_CategoryName,'CategoryParentID'=>$_CategoryParentID,'CategoryParentName'=>$_CategoryParentName,'CSIDList'=>$_CSIDList,'Expired'=>$_Expired,'IntlAutosFixedCat'=>$_IntlAutosFixedCat,'LeafCategory'=>$_LeafCategory,'Virtual'=>$_Virtual));
	}
	/**
	 * Set AutoPayEnabled
	 * @param boolean AutoPayEnabled
	 * @return boolean
	 */
	public function setAutoPayEnabled($_AutoPayEnabled)
	{
		return ($this->AutoPayEnabled = $_AutoPayEnabled);
	}
	/**
	 * Get AutoPayEnabled
	 * @return boolean
	 */
	public function getAutoPayEnabled()
	{
		return $this->AutoPayEnabled;
	}
	/**
	 * Set B2BVATEnabled
	 * @param boolean B2BVATEnabled
	 * @return boolean
	 */
	public function setB2BVATEnabled($_B2BVATEnabled)
	{
		return ($this->B2BVATEnabled = $_B2BVATEnabled);
	}
	/**
	 * Get B2BVATEnabled
	 * @return boolean
	 */
	public function getB2BVATEnabled()
	{
		return $this->B2BVATEnabled;
	}
	/**
	 * Set CatalogEnabled
	 * @param boolean CatalogEnabled
	 * @return boolean
	 */
	public function setCatalogEnabled($_CatalogEnabled)
	{
		return ($this->CatalogEnabled = $_CatalogEnabled);
	}
	/**
	 * Get CatalogEnabled
	 * @return boolean
	 */
	public function getCatalogEnabled()
	{
		return $this->CatalogEnabled;
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set CategoryLevel
	 * @param int CategoryLevel
	 * @return int
	 */
	public function setCategoryLevel($_CategoryLevel)
	{
		return ($this->CategoryLevel = $_CategoryLevel);
	}
	/**
	 * Get CategoryLevel
	 * @return int
	 */
	public function getCategoryLevel()
	{
		return $this->CategoryLevel;
	}
	/**
	 * Set CategoryName
	 * @param string CategoryName
	 * @return string
	 */
	public function setCategoryName($_CategoryName)
	{
		return ($this->CategoryName = $_CategoryName);
	}
	/**
	 * Get CategoryName
	 * @return string
	 */
	public function getCategoryName()
	{
		return $this->CategoryName;
	}
	/**
	 * Set CategoryParentID
	 * @param string CategoryParentID
	 * @return string
	 */
	public function setCategoryParentID($_CategoryParentID)
	{
		return ($this->CategoryParentID = $_CategoryParentID);
	}
	/**
	 * Get CategoryParentID
	 * @return string
	 */
	public function getCategoryParentID()
	{
		return $this->CategoryParentID;
	}
	/**
	 * Set CategoryParentName
	 * @param string CategoryParentName
	 * @return string
	 */
	public function setCategoryParentName($_CategoryParentName)
	{
		return ($this->CategoryParentName = $_CategoryParentName);
	}
	/**
	 * Get CategoryParentName
	 * @return string
	 */
	public function getCategoryParentName()
	{
		return $this->CategoryParentName;
	}
	/**
	 * Set CSIDList
	 * @param string CSIDList
	 * @return string
	 */
	public function setCSIDList($_CSIDList)
	{
		return ($this->CSIDList = $_CSIDList);
	}
	/**
	 * Get CSIDList
	 * @return string
	 */
	public function getCSIDList()
	{
		return $this->CSIDList;
	}
	/**
	 * Set Expired
	 * @param boolean Expired
	 * @return boolean
	 */
	public function setExpired($_Expired)
	{
		return ($this->Expired = $_Expired);
	}
	/**
	 * Get Expired
	 * @return boolean
	 */
	public function getExpired()
	{
		return $this->Expired;
	}
	/**
	 * Set IntlAutosFixedCat
	 * @param boolean IntlAutosFixedCat
	 * @return boolean
	 */
	public function setIntlAutosFixedCat($_IntlAutosFixedCat)
	{
		return ($this->IntlAutosFixedCat = $_IntlAutosFixedCat);
	}
	/**
	 * Get IntlAutosFixedCat
	 * @return boolean
	 */
	public function getIntlAutosFixedCat()
	{
		return $this->IntlAutosFixedCat;
	}
	/**
	 * Set LeafCategory
	 * @param boolean LeafCategory
	 * @return boolean
	 */
	public function setLeafCategory($_LeafCategory)
	{
		return ($this->LeafCategory = $_LeafCategory);
	}
	/**
	 * Get LeafCategory
	 * @return boolean
	 */
	public function getLeafCategory()
	{
		return $this->LeafCategory;
	}
	/**
	 * Set Virtual
	 * @param boolean Virtual
	 * @return boolean
	 */
	public function setVirtual($_Virtual)
	{
		return ($this->Virtual = $_Virtual);
	}
	/**
	 * Get Virtual
	 * @return boolean
	 */
	public function getVirtual()
	{
		return $this->Virtual;
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