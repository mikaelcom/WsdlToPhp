<?php
/**
 * Class file for XiFundDataTypeCustodian
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeCustodian
 * @date 08/07/2012
 */
class XiFundDataTypeCustodian extends XiFundDataWsdlClass
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
	 * @var XiFundDataTypeCustodianTypes
	 */
	public $Type;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeAddress
	 */
	public $Address;
	/**
	 * The CustodyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeCustodyTypes
	 */
	public $CustodyType;
	/**
	 * Constructor
	 * @param string Name
	 * @param XiFundDataTypeCustodianTypes Type
	 * @param XiFundDataTypeAddress Address
	 * @param XiFundDataTypeCustodyTypes CustodyType
	 * @return XiFundDataTypeCustodian
	 */
	public function __construct($_Name = null,$_Type,$_Address = null,$_CustodyType)
	{
		parent::__construct(array('Name'=>$_Name,'Type'=>$_Type,'Address'=>$_Address,'CustodyType'=>$_CustodyType));
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
	 * @param CustodianTypes Type
	 * @return CustodianTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFundDataTypeCustodianTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundDataTypeCustodianTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Address
	 * @param Address Address
	 * @return Address
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return XiFundDataTypeAddress
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set CustodyType
	 * @param CustodyTypes CustodyType
	 * @return CustodyTypes
	 */
	public function setCustodyType($_CustodyType)
	{
		return ($this->CustodyType = XiFundDataTypeCustodyTypes::valueIsValid($_CustodyType)?$_CustodyType:null);
	}
	/**
	 * Get CustodyType
	 * @return XiFundDataTypeCustodyTypes
	 */
	public function getCustodyType()
	{
		return $this->CustodyType;
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