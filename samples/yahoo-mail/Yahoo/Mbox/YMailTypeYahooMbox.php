<?php
/**
 * Class file for YMailTypeYahooMbox
 * @date 02/07/2012
 */
/**
 * Class YMailTypeYahooMbox
 * @date 02/07/2012
 */
class YMailTypeYahooMbox extends YMailWsdlClass
{
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The farm
	 * @var string
	 */
	public $farm;
	/**
	 * The sledid
	 * @var string
	 */
	public $sledid;
	/**
	 * The silo
	 * @var string
	 */
	public $silo;
	/**
	 * The isBizmail
	 * @var boolean
	 */
	public $isBizmail;
	/**
	 * The domainMembership
	 * @var string
	 */
	public $domainMembership;
	/**
	 * Constructor
	 * @param string email
	 * @param string farm
	 * @param string sledid
	 * @param string silo
	 * @param boolean isBizmail
	 * @param string domainMembership
	 * @return YMailTypeYahooMbox
	 */
	public function __construct($_email = null,$_farm = null,$_sledid = null,$_silo = null,$_isBizmail = null,$_domainMembership = null)
	{
		parent::__construct(array('email'=>$_email,'farm'=>$_farm,'sledid'=>$_sledid,'silo'=>$_silo,'isBizmail'=>$_isBizmail,'domainMembership'=>$_domainMembership));
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
	 * Set farm
	 * @param string farm
	 * @return string
	 */
	public function setFarm($_farm)
	{
		return ($this->farm = $_farm);
	}
	/**
	 * Get farm
	 * @return string
	 */
	public function getFarm()
	{
		return $this->farm;
	}
	/**
	 * Set sledid
	 * @param string sledid
	 * @return string
	 */
	public function setSledid($_sledid)
	{
		return ($this->sledid = $_sledid);
	}
	/**
	 * Get sledid
	 * @return string
	 */
	public function getSledid()
	{
		return $this->sledid;
	}
	/**
	 * Set silo
	 * @param string silo
	 * @return string
	 */
	public function setSilo($_silo)
	{
		return ($this->silo = $_silo);
	}
	/**
	 * Get silo
	 * @return string
	 */
	public function getSilo()
	{
		return $this->silo;
	}
	/**
	 * Set isBizmail
	 * @param boolean isBizmail
	 * @return boolean
	 */
	public function setIsBizmail($_isBizmail)
	{
		return ($this->isBizmail = $_isBizmail);
	}
	/**
	 * Get isBizmail
	 * @return boolean
	 */
	public function getIsBizmail()
	{
		return $this->isBizmail;
	}
	/**
	 * Set domainMembership
	 * @param string domainMembership
	 * @return string
	 */
	public function setDomainMembership($_domainMembership)
	{
		return ($this->domainMembership = $_domainMembership);
	}
	/**
	 * Get domainMembership
	 * @return string
	 */
	public function getDomainMembership()
	{
		return $this->domainMembership;
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