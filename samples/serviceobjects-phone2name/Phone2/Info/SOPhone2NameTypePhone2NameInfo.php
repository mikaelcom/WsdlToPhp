<?php
/**
 * Class file for SOPhone2NameTypePhone2NameInfo
 * @date 08/07/2012
 */
/**
 * Class SOPhone2NameTypePhone2NameInfo
 * @date 08/07/2012
 */
class SOPhone2NameTypePhone2NameInfo extends SOPhone2NameWsdlClass
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
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastName;
	/**
	 * The PhoneType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneType;
	/**
	 * Constructor
	 * @param string Name
	 * @param string FirstName
	 * @param string LastName
	 * @param string PhoneType
	 * @return SOPhone2NameTypePhone2NameInfo
	 */
	public function __construct($_Name = null,$_FirstName = null,$_LastName = null,$_PhoneType = null)
	{
		parent::__construct(array('Name'=>$_Name,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'PhoneType'=>$_PhoneType));
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
	 * Set FirstName
	 * @param string FirstName
	 * @return string
	 */
	public function setFirstName($_FirstName)
	{
		return ($this->FirstName = $_FirstName);
	}
	/**
	 * Get FirstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set LastName
	 * @param string LastName
	 * @return string
	 */
	public function setLastName($_LastName)
	{
		return ($this->LastName = $_LastName);
	}
	/**
	 * Get LastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set PhoneType
	 * @param string PhoneType
	 * @return string
	 */
	public function setPhoneType($_PhoneType)
	{
		return ($this->PhoneType = $_PhoneType);
	}
	/**
	 * Get PhoneType
	 * @return string
	 */
	public function getPhoneType()
	{
		return $this->PhoneType;
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