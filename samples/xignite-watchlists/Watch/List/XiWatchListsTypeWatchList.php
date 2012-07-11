<?php
/**
 * Class file for XiWatchListsTypeWatchList
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeWatchList
 * @date 08/07/2012
 */
class XiWatchListsTypeWatchList extends XiWatchListsTypeCommon
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeWatchListTypes
	 */
	public $Type;
	/**
	 * The Items
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiWatchListsTypeArrayOfWatchListItem
	 */
	public $Items;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param string Name
	 * @param string Description
	 * @param XiWatchListsTypeWatchListTypes Type
	 * @param XiWatchListsTypeArrayOfWatchListItem Items
	 * @return XiWatchListsTypeWatchList
	 */
	public function __construct($_Identifier = null,$_Name = null,$_Description = null,$_Type,$_Items = null)
	{
		XiWatchListsWsdlClass::__construct(array('Identifier'=>$_Identifier,'Name'=>$_Name,'Description'=>$_Description,'Type'=>$_Type,'Items'=>new XiWatchListsTypeArrayOfWatchListItem($_Items)));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
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
	 * Set Type
	 * @param WatchListTypes Type
	 * @return WatchListTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiWatchListsTypeWatchListTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiWatchListsTypeWatchListTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Items
	 * @param ArrayOfWatchListItem Items
	 * @return ArrayOfWatchListItem
	 */
	public function setItems($_Items)
	{
		return ($this->Items = $_Items);
	}
	/**
	 * Get Items
	 * @return XiWatchListsTypeArrayOfWatchListItem
	 */
	public function getItems()
	{
		return $this->Items;
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