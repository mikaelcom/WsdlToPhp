<?php
/**
 * Class file for OvhTypeNicPublicInfoReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicPublicInfoReturn
 * @date 02/07/2012
 */
class OvhTypeNicPublicInfoReturn extends OvhWsdlClass
{
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The firstname
	 * @var string
	 */
	public $firstname;
	/**
	 * The organisation
	 * @var string
	 */
	public $organisation;
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * Constructor
	 * @param string nic
	 * @param string name
	 * @param string firstname
	 * @param string organisation
	 * @param string city
	 * @return OvhTypeNicPublicInfoReturn
	 */
	public function __construct($_nic = null,$_name = null,$_firstname = null,$_organisation = null,$_city = null)
	{
		parent::__construct(array('nic'=>$_nic,'name'=>$_name,'firstname'=>$_firstname,'organisation'=>$_organisation,'city'=>$_city));
	}
	/**
	 * Set nic
	 * @param string nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get nic
	 * @return string
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set firstname
	 * @param string firstname
	 * @return string
	 */
	public function setFirstname($_firstname)
	{
		return ($this->firstname = $_firstname);
	}
	/**
	 * Get firstname
	 * @return string
	 */
	public function getFirstname()
	{
		return $this->firstname;
	}
	/**
	 * Set organisation
	 * @param string organisation
	 * @return string
	 */
	public function setOrganisation($_organisation)
	{
		return ($this->organisation = $_organisation);
	}
	/**
	 * Get organisation
	 * @return string
	 */
	public function getOrganisation()
	{
		return $this->organisation;
	}
	/**
	 * Set city
	 * @param string city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get city
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
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