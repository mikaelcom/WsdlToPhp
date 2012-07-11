<?php
/**
 * Class file for XiOFACTypeSearchByName
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeSearchByName
 * @date 08/07/2012
 */
class XiOFACTypeSearchByName extends XiOFACWsdlClass
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
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiOFACTypeOFACTypes
	 */
	public $Type;
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
	 * @param XiOFACTypeOFACTypes Type
	 * @param XiOFACTypeSearchTypes SearchType
	 * @return XiOFACTypeSearchByName
	 */
	public function __construct($_Name = null,$_Type,$_SearchType)
	{
		parent::__construct(array('Name'=>$_Name,'Type'=>$_Type,'SearchType'=>$_SearchType));
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
	 * Set Type
	 * @param OFACTypes Type
	 * @return OFACTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiOFACTypeOFACTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiOFACTypeOFACTypes
	 */
	public function getType()
	{
		return $this->Type;
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