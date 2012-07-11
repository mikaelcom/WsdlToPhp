<?php
/**
 * Class file for OvhTypeRipeOrganisationStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeOrganisationStruct
 * @date 02/07/2012
 */
class OvhTypeRipeOrganisationStruct extends OvhWsdlClass
{
	/**
	 * The organisation
	 * @var string
	 */
	public $organisation;
	/**
	 * The orgname
	 * @var string
	 */
	public $orgname;
	/**
	 * The orgtype
	 * @var string
	 */
	public $orgtype;
	/**
	 * The address
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $address;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The abusemailbox
	 * @var string
	 */
	public $abusemailbox;
	/**
	 * The mntref
	 * @var string
	 */
	public $mntref;
	/**
	 * The mntby
	 * @var string
	 */
	public $mntby;
	/**
	 * The changed
	 * @var string
	 */
	public $changed;
	/**
	 * The source
	 * @var string
	 */
	public $source;
	/**
	 * Constructor
	 * @param string organisation
	 * @param string orgname
	 * @param string orgtype
	 * @param OvhTypeMyArrayOfStringType address
	 * @param string email
	 * @param string abusemailbox
	 * @param string mntref
	 * @param string mntby
	 * @param string changed
	 * @param string source
	 * @return OvhTypeRipeOrganisationStruct
	 */
	public function __construct($_organisation = null,$_orgname = null,$_orgtype = null,$_address = null,$_email = null,$_abusemailbox = null,$_mntref = null,$_mntby = null,$_changed = null,$_source = null)
	{
		parent::__construct(array('organisation'=>$_organisation,'orgname'=>$_orgname,'orgtype'=>$_orgtype,'address'=>new OvhTypeMyArrayOfStringType($_address),'email'=>$_email,'abusemailbox'=>$_abusemailbox,'mntref'=>$_mntref,'mntby'=>$_mntby,'changed'=>$_changed,'source'=>$_source));
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
	 * Set orgname
	 * @param string orgname
	 * @return string
	 */
	public function setOrgname($_orgname)
	{
		return ($this->orgname = $_orgname);
	}
	/**
	 * Get orgname
	 * @return string
	 */
	public function getOrgname()
	{
		return $this->orgname;
	}
	/**
	 * Set orgtype
	 * @param string orgtype
	 * @return string
	 */
	public function setOrgtype($_orgtype)
	{
		return ($this->orgtype = $_orgtype);
	}
	/**
	 * Get orgtype
	 * @return string
	 */
	public function getOrgtype()
	{
		return $this->orgtype;
	}
	/**
	 * Set address
	 * @param MyArrayOfStringType address
	 * @return MyArrayOfStringType
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set abusemailbox
	 * @param string abusemailbox
	 * @return string
	 */
	public function setAbusemailbox($_abusemailbox)
	{
		return ($this->abusemailbox = $_abusemailbox);
	}
	/**
	 * Get abusemailbox
	 * @return string
	 */
	public function getAbusemailbox()
	{
		return $this->abusemailbox;
	}
	/**
	 * Set mntref
	 * @param string mntref
	 * @return string
	 */
	public function setMntref($_mntref)
	{
		return ($this->mntref = $_mntref);
	}
	/**
	 * Get mntref
	 * @return string
	 */
	public function getMntref()
	{
		return $this->mntref;
	}
	/**
	 * Set mntby
	 * @param string mntby
	 * @return string
	 */
	public function setMntby($_mntby)
	{
		return ($this->mntby = $_mntby);
	}
	/**
	 * Get mntby
	 * @return string
	 */
	public function getMntby()
	{
		return $this->mntby;
	}
	/**
	 * Set changed
	 * @param string changed
	 * @return string
	 */
	public function setChanged($_changed)
	{
		return ($this->changed = $_changed);
	}
	/**
	 * Get changed
	 * @return string
	 */
	public function getChanged()
	{
		return $this->changed;
	}
	/**
	 * Set source
	 * @param string source
	 * @return string
	 */
	public function setSource($_source)
	{
		return ($this->source = $_source);
	}
	/**
	 * Get source
	 * @return string
	 */
	public function getSource()
	{
		return $this->source;
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