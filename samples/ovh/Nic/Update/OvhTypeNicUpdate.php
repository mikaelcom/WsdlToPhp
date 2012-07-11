<?php
/**
 * Class file for OvhTypeNicUpdate
 * @date 02/07/2012
 */
/**
 * Class OvhTypeNicUpdate
 * @date 02/07/2012
 */
class OvhTypeNicUpdate extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
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
	 * The legalForm
	 * @var string
	 */
	public $legalForm;
	/**
	 * The organisation
	 * @var string
	 */
	public $organisation;
	/**
	 * The legalName
	 * @var string
	 */
	public $legalName;
	/**
	 * The legalNumber
	 * @var string
	 */
	public $legalNumber;
	/**
	 * The vat
	 * @var string
	 */
	public $vat;
	/**
	 * Constructor
	 * @param string session
	 * @param string nic
	 * @param string name
	 * @param string firstname
	 * @param string legalForm
	 * @param string organisation
	 * @param string legalName
	 * @param string legalNumber
	 * @param string vat
	 * @return OvhTypeNicUpdate
	 */
	public function __construct($_session = null,$_nic = null,$_name = null,$_firstname = null,$_legalForm = null,$_organisation = null,$_legalName = null,$_legalNumber = null,$_vat = null)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'name'=>$_name,'firstname'=>$_firstname,'legalForm'=>$_legalForm,'organisation'=>$_organisation,'legalName'=>$_legalName,'legalNumber'=>$_legalNumber,'vat'=>$_vat));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
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
	 * Set legalForm
	 * @param string legalForm
	 * @return string
	 */
	public function setLegalForm($_legalForm)
	{
		return ($this->legalForm = $_legalForm);
	}
	/**
	 * Get legalForm
	 * @return string
	 */
	public function getLegalForm()
	{
		return $this->legalForm;
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
	 * Set legalName
	 * @param string legalName
	 * @return string
	 */
	public function setLegalName($_legalName)
	{
		return ($this->legalName = $_legalName);
	}
	/**
	 * Get legalName
	 * @return string
	 */
	public function getLegalName()
	{
		return $this->legalName;
	}
	/**
	 * Set legalNumber
	 * @param string legalNumber
	 * @return string
	 */
	public function setLegalNumber($_legalNumber)
	{
		return ($this->legalNumber = $_legalNumber);
	}
	/**
	 * Get legalNumber
	 * @return string
	 */
	public function getLegalNumber()
	{
		return $this->legalNumber;
	}
	/**
	 * Set vat
	 * @param string vat
	 * @return string
	 */
	public function setVat($_vat)
	{
		return ($this->vat = $_vat);
	}
	/**
	 * Get vat
	 * @return string
	 */
	public function getVat()
	{
		return $this->vat;
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