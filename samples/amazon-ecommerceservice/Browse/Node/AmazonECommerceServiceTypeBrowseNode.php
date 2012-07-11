<?php
/**
 * Class file for AmazonECommerceServiceTypeBrowseNode
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeBrowseNode
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeBrowseNode extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The BrowseNodeId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $BrowseNodeId;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Name;
	/**
	 * The IsCategoryRoot
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IsCategoryRoot;
	/**
	 * The Properties
	 * @var AmazonECommerceServiceTypeProperties
	 */
	public $Properties;
	/**
	 * The Children
	 * @var AmazonECommerceServiceTypeChildren
	 */
	public $Children;
	/**
	 * The Ancestors
	 * @var AmazonECommerceServiceTypeAncestors
	 */
	public $Ancestors;
	/**
	 * The TopSellers
	 * @var AmazonECommerceServiceTypeTopSellers
	 */
	public $TopSellers;
	/**
	 * The NewReleases
	 * @var AmazonECommerceServiceTypeNewReleases
	 */
	public $NewReleases;
	/**
	 * The TopItemSet
	 * @var AmazonECommerceServiceTypeTopItemSet
	 */
	public $TopItemSet;
	/**
	 * Constructor
	 * @param string BrowseNodeId
	 * @param string Name
	 * @param boolean IsCategoryRoot
	 * @param AmazonECommerceServiceTypeProperties Properties
	 * @param AmazonECommerceServiceTypeChildren Children
	 * @param AmazonECommerceServiceTypeAncestors Ancestors
	 * @param AmazonECommerceServiceTypeTopSellers TopSellers
	 * @param AmazonECommerceServiceTypeNewReleases NewReleases
	 * @param AmazonECommerceServiceTypeTopItemSet TopItemSet
	 * @return AmazonECommerceServiceTypeBrowseNode
	 */
	public function __construct($_BrowseNodeId = null,$_Name = null,$_IsCategoryRoot = null,$_Properties = null,$_Children = null,$_Ancestors = null,$_TopSellers = null,$_NewReleases = null,$_TopItemSet = null)
	{
		parent::__construct(array('BrowseNodeId'=>$_BrowseNodeId,'Name'=>$_Name,'IsCategoryRoot'=>$_IsCategoryRoot,'Properties'=>$_Properties,'Children'=>$_Children,'Ancestors'=>$_Ancestors,'TopSellers'=>$_TopSellers,'NewReleases'=>$_NewReleases,'TopItemSet'=>$_TopItemSet));
	}
	/**
	 * Set BrowseNodeId
	 * @param string BrowseNodeId
	 * @return string
	 */
	public function setBrowseNodeId($_BrowseNodeId)
	{
		return ($this->BrowseNodeId = $_BrowseNodeId);
	}
	/**
	 * Get BrowseNodeId
	 * @return string
	 */
	public function getBrowseNodeId()
	{
		return $this->BrowseNodeId;
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
	 * Set IsCategoryRoot
	 * @param boolean IsCategoryRoot
	 * @return boolean
	 */
	public function setIsCategoryRoot($_IsCategoryRoot)
	{
		return ($this->IsCategoryRoot = $_IsCategoryRoot);
	}
	/**
	 * Get IsCategoryRoot
	 * @return boolean
	 */
	public function getIsCategoryRoot()
	{
		return $this->IsCategoryRoot;
	}
	/**
	 * Set Properties
	 * @param Properties Properties
	 * @return Properties
	 */
	public function setProperties($_Properties)
	{
		return ($this->Properties = $_Properties);
	}
	/**
	 * Get Properties
	 * @return AmazonECommerceServiceTypeProperties
	 */
	public function getProperties()
	{
		return $this->Properties;
	}
	/**
	 * Set Children
	 * @param Children Children
	 * @return Children
	 */
	public function setChildren($_Children)
	{
		return ($this->Children = $_Children);
	}
	/**
	 * Get Children
	 * @return AmazonECommerceServiceTypeChildren
	 */
	public function getChildren()
	{
		return $this->Children;
	}
	/**
	 * Set Ancestors
	 * @param Ancestors Ancestors
	 * @return Ancestors
	 */
	public function setAncestors($_Ancestors)
	{
		return ($this->Ancestors = $_Ancestors);
	}
	/**
	 * Get Ancestors
	 * @return AmazonECommerceServiceTypeAncestors
	 */
	public function getAncestors()
	{
		return $this->Ancestors;
	}
	/**
	 * Set TopSellers
	 * @param TopSellers TopSellers
	 * @return TopSellers
	 */
	public function setTopSellers($_TopSellers)
	{
		return ($this->TopSellers = $_TopSellers);
	}
	/**
	 * Get TopSellers
	 * @return AmazonECommerceServiceTypeTopSellers
	 */
	public function getTopSellers()
	{
		return $this->TopSellers;
	}
	/**
	 * Set NewReleases
	 * @param NewReleases NewReleases
	 * @return NewReleases
	 */
	public function setNewReleases($_NewReleases)
	{
		return ($this->NewReleases = $_NewReleases);
	}
	/**
	 * Get NewReleases
	 * @return AmazonECommerceServiceTypeNewReleases
	 */
	public function getNewReleases()
	{
		return $this->NewReleases;
	}
	/**
	 * Set TopItemSet
	 * @param TopItemSet TopItemSet
	 * @return TopItemSet
	 */
	public function setTopItemSet($_TopItemSet)
	{
		return ($this->TopItemSet = $_TopItemSet);
	}
	/**
	 * Get TopItemSet
	 * @return AmazonECommerceServiceTypeTopItemSet
	 */
	public function getTopItemSet()
	{
		return $this->TopItemSet;
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