<?php
/**
 * Class file for EccGeoDistTypeGetDistance
 * @date 03/07/2012
 */
/**
 * Class EccGeoDistTypeGetDistance
 * @date 03/07/2012
 */
class EccGeoDistTypeGetDistance extends EccGeoDistWsdlClass
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
	 * The ZipCode01
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipCode01;
	/**
	 * The ZipCode02
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipCode02;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string ZipCode01
	 * @param string ZipCode02
	 * @return EccGeoDistTypeGetDistance
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_ZipCode01 = null,$_ZipCode02 = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'ZipCode01'=>$_ZipCode01,'ZipCode02'=>$_ZipCode02));
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
	 * Set ZipCode01
	 * @param string ZipCode01
	 * @return string
	 */
	public function setZipCode01($_ZipCode01)
	{
		return ($this->ZipCode01 = $_ZipCode01);
	}
	/**
	 * Get ZipCode01
	 * @return string
	 */
	public function getZipCode01()
	{
		return $this->ZipCode01;
	}
	/**
	 * Set ZipCode02
	 * @param string ZipCode02
	 * @return string
	 */
	public function setZipCode02($_ZipCode02)
	{
		return ($this->ZipCode02 = $_ZipCode02);
	}
	/**
	 * Get ZipCode02
	 * @return string
	 */
	public function getZipCode02()
	{
		return $this->ZipCode02;
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