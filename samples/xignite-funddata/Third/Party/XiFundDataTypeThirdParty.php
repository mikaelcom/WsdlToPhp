<?php
/**
 * Class file for XiFundDataTypeThirdParty
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeThirdParty
 * @date 08/07/2012
 */
class XiFundDataTypeThirdParty extends XiFundDataWsdlClass
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
	 * @var XiFundDataTypeAdviserTypes
	 */
	public $Type;
	/**
	 * The FileNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FileNumber;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeAddress
	 */
	public $Address;
	/**
	 * Constructor
	 * @param string Name
	 * @param XiFundDataTypeAdviserTypes Type
	 * @param string FileNumber
	 * @param XiFundDataTypeAddress Address
	 * @return XiFundDataTypeThirdParty
	 */
	public function __construct($_Name = null,$_Type,$_FileNumber = null,$_Address = null)
	{
		parent::__construct(array('Name'=>$_Name,'Type'=>$_Type,'FileNumber'=>$_FileNumber,'Address'=>$_Address));
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
	 * @param AdviserTypes Type
	 * @return AdviserTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFundDataTypeAdviserTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundDataTypeAdviserTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set FileNumber
	 * @param string FileNumber
	 * @return string
	 */
	public function setFileNumber($_FileNumber)
	{
		return ($this->FileNumber = $_FileNumber);
	}
	/**
	 * Get FileNumber
	 * @return string
	 */
	public function getFileNumber()
	{
		return $this->FileNumber;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>