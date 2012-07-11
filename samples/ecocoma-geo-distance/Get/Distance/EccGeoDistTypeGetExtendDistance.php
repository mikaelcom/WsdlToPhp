<?php
/**
 * Class file for EccGeoDistTypeGetExtendDistance
 * @date 03/07/2012
 */
/**
 * Class EccGeoDistTypeGetExtendDistance
 * @date 03/07/2012
 */
class EccGeoDistTypeGetExtendDistance extends EccGeoDistWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The Address01
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address01;
	/**
	 * The Address02
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address02;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string Address01
	 * @param string Address02
	 * @return EccGeoDistTypeGetExtendDistance
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_Address01 = null,$_Address02 = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'Address01'=>$_Address01,'Address02'=>$_Address02));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set Address01
	 * @param string Address01
	 * @return string
	 */
	public function setAddress01($_Address01)
	{
		return ($this->Address01 = $_Address01);
	}
	/**
	 * Get Address01
	 * @return string
	 */
	public function getAddress01()
	{
		return $this->Address01;
	}
	/**
	 * Set Address02
	 * @param string Address02
	 * @return string
	 */
	public function setAddress02($_Address02)
	{
		return ($this->Address02 = $_Address02);
	}
	/**
	 * Get Address02
	 * @return string
	 */
	public function getAddress02()
	{
		return $this->Address02;
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