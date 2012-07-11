<?php
/**
 * Class file for XiOFACTypeSearchOrganization
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchOrganization
 * @date 08/07/2012
 */
class XiOFACTypeSearchOrganization extends XiOFACWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The SearchType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeSearchTypes
	 */
	public $SearchType;
	/**
	 * Constructor
	 * @param string Name
	 * @param XiOFACTypeSearchTypes SearchType
	 * @return XiOFACTypeSearchOrganization
	 */
	public function __construct($_Name = null,$_SearchType)
	{
		parent::__construct(array('Name'=>$_Name,'SearchType'=>$_SearchType));
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
	 * Set SearchType
	 * @param SearchTypes SearchType
	 * @return SearchTypes
	 */
	public function setSearchType($_SearchType)
	{
		return ($this->SearchType = XiOFACTypeSearchTypes::valueIsValid($_SearchType)?$_SearchType:null);
	}
	/**
	 * Get SearchType
	 * @return XiOFACTypeSearchTypes
	 */
	public function getSearchType()
	{
		return $this->SearchType;
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