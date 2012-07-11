<?php
/**
 * Class file for SPSitesTypeTemplate
 * @date 06/07/2012
 */
/**
 * Class SPSitesTypeTemplate
 * @date 06/07/2012
 */
class SPSitesTypeTemplate extends SPSitesWsdlClass
{
	/**
	 * The ID
	 * @var int
	 */
	public $ID;
	/**
	 * The Title
	 * @var string
	 */
	public $Title;
	/**
	 * The Name
	 * @var string
	 */
	public $Name;
	/**
	 * The IsUnique
	 * @var boolean
	 */
	public $IsUnique;
	/**
	 * The IsHidden
	 * @var boolean
	 */
	public $IsHidden;
	/**
	 * The Description
	 * @var string
	 */
	public $Description;
	/**
	 * The ImageUrl
	 * @var string
	 */
	public $ImageUrl;
	/**
	 * The IsCustom
	 * @var boolean
	 */
	public $IsCustom;
	/**
	 * The IsSubWebOnly
	 * @var boolean
	 */
	public $IsSubWebOnly;
	/**
	 * The IsRootWebOnly
	 * @var boolean
	 */
	public $IsRootWebOnly;
	/**
	 * The DisplayCategory
	 * @var string
	 */
	public $DisplayCategory;
	/**
	 * The FilterCategories
	 * @var string
	 */
	public $FilterCategories;
	/**
	 * The HasProvisionClass
	 * @var boolean
	 */
	public $HasProvisionClass;
	/**
	 * Constructor
	 * @param int ID
	 * @param string Title
	 * @param string Name
	 * @param boolean IsUnique
	 * @param boolean IsHidden
	 * @param string Description
	 * @param string ImageUrl
	 * @param boolean IsCustom
	 * @param boolean IsSubWebOnly
	 * @param boolean IsRootWebOnly
	 * @param string DisplayCategory
	 * @param string FilterCategories
	 * @param boolean HasProvisionClass
	 * @return SPSitesTypeTemplate
	 */
	public function __construct($_ID = null,$_Title = null,$_Name = null,$_IsUnique = null,$_IsHidden = null,$_Description = null,$_ImageUrl = null,$_IsCustom = null,$_IsSubWebOnly = null,$_IsRootWebOnly = null,$_DisplayCategory = null,$_FilterCategories = null,$_HasProvisionClass = null)
	{
		parent::__construct(array('ID'=>$_ID,'Title'=>$_Title,'Name'=>$_Name,'IsUnique'=>$_IsUnique,'IsHidden'=>$_IsHidden,'Description'=>$_Description,'ImageUrl'=>$_ImageUrl,'IsCustom'=>$_IsCustom,'IsSubWebOnly'=>$_IsSubWebOnly,'IsRootWebOnly'=>$_IsRootWebOnly,'DisplayCategory'=>$_DisplayCategory,'FilterCategories'=>$_FilterCategories,'HasProvisionClass'=>$_HasProvisionClass));
	}
	/**
	 * Set ID
	 * @param int ID
	 * @return int
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return int
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
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
	 * Set IsUnique
	 * @param boolean IsUnique
	 * @return boolean
	 */
	public function setIsUnique($_IsUnique)
	{
		return ($this->IsUnique = $_IsUnique);
	}
	/**
	 * Get IsUnique
	 * @return boolean
	 */
	public function getIsUnique()
	{
		return $this->IsUnique;
	}
	/**
	 * Set IsHidden
	 * @param boolean IsHidden
	 * @return boolean
	 */
	public function setIsHidden($_IsHidden)
	{
		return ($this->IsHidden = $_IsHidden);
	}
	/**
	 * Get IsHidden
	 * @return boolean
	 */
	public function getIsHidden()
	{
		return $this->IsHidden;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set ImageUrl
	 * @param string ImageUrl
	 * @return string
	 */
	public function setImageUrl($_ImageUrl)
	{
		return ($this->ImageUrl = $_ImageUrl);
	}
	/**
	 * Get ImageUrl
	 * @return string
	 */
	public function getImageUrl()
	{
		return $this->ImageUrl;
	}
	/**
	 * Set IsCustom
	 * @param boolean IsCustom
	 * @return boolean
	 */
	public function setIsCustom($_IsCustom)
	{
		return ($this->IsCustom = $_IsCustom);
	}
	/**
	 * Get IsCustom
	 * @return boolean
	 */
	public function getIsCustom()
	{
		return $this->IsCustom;
	}
	/**
	 * Set IsSubWebOnly
	 * @param boolean IsSubWebOnly
	 * @return boolean
	 */
	public function setIsSubWebOnly($_IsSubWebOnly)
	{
		return ($this->IsSubWebOnly = $_IsSubWebOnly);
	}
	/**
	 * Get IsSubWebOnly
	 * @return boolean
	 */
	public function getIsSubWebOnly()
	{
		return $this->IsSubWebOnly;
	}
	/**
	 * Set IsRootWebOnly
	 * @param boolean IsRootWebOnly
	 * @return boolean
	 */
	public function setIsRootWebOnly($_IsRootWebOnly)
	{
		return ($this->IsRootWebOnly = $_IsRootWebOnly);
	}
	/**
	 * Get IsRootWebOnly
	 * @return boolean
	 */
	public function getIsRootWebOnly()
	{
		return $this->IsRootWebOnly;
	}
	/**
	 * Set DisplayCategory
	 * @param string DisplayCategory
	 * @return string
	 */
	public function setDisplayCategory($_DisplayCategory)
	{
		return ($this->DisplayCategory = $_DisplayCategory);
	}
	/**
	 * Get DisplayCategory
	 * @return string
	 */
	public function getDisplayCategory()
	{
		return $this->DisplayCategory;
	}
	/**
	 * Set FilterCategories
	 * @param string FilterCategories
	 * @return string
	 */
	public function setFilterCategories($_FilterCategories)
	{
		return ($this->FilterCategories = $_FilterCategories);
	}
	/**
	 * Get FilterCategories
	 * @return string
	 */
	public function getFilterCategories()
	{
		return $this->FilterCategories;
	}
	/**
	 * Set HasProvisionClass
	 * @param boolean HasProvisionClass
	 * @return boolean
	 */
	public function setHasProvisionClass($_HasProvisionClass)
	{
		return ($this->HasProvisionClass = $_HasProvisionClass);
	}
	/**
	 * Get HasProvisionClass
	 * @return boolean
	 */
	public function getHasProvisionClass()
	{
		return $this->HasProvisionClass;
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