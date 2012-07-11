<?php
/**
 * Class file for OvhTypeDedicatedRipeUpdateOrganisation
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRipeUpdateOrganisation
 * @date 02/07/2012
 */
class OvhTypeDedicatedRipeUpdateOrganisation extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ripeId
	 * @var string
	 */
	public $ripeId;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The abuse
	 * @var string
	 */
	public $abuse;
	/**
	 * The descr
	 * @var string
	 */
	public $descr;
	/**
	 * The phone
	 * @var string
	 */
	public $phone;
	/**
	 * The fax
	 * @var string
	 */
	public $fax;
	/**
	 * The remarks
	 * @var string
	 */
	public $remarks;
	/**
	 * Constructor
	 * @param string session
	 * @param string ripeId
	 * @param string name
	 * @param string address
	 * @param string email
	 * @param string abuse
	 * @param string descr
	 * @param string phone
	 * @param string fax
	 * @param string remarks
	 * @return OvhTypeDedicatedRipeUpdateOrganisation
	 */
	public function __construct($_session = null,$_ripeId = null,$_name = null,$_address = null,$_email = null,$_abuse = null,$_descr = null,$_phone = null,$_fax = null,$_remarks = null)
	{
		parent::__construct(array('session'=>$_session,'ripeId'=>$_ripeId,'name'=>$_name,'address'=>$_address,'email'=>$_email,'abuse'=>$_abuse,'descr'=>$_descr,'phone'=>$_phone,'fax'=>$_fax,'remarks'=>$_remarks));
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
	 * Set ripeId
	 * @param string ripeId
	 * @return string
	 */
	public function setRipeId($_ripeId)
	{
		return ($this->ripeId = $_ripeId);
	}
	/**
	 * Get ripeId
	 * @return string
	 */
	public function getRipeId()
	{
		return $this->ripeId;
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
	 * Set address
	 * @param string address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return string
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
	 * Set abuse
	 * @param string abuse
	 * @return string
	 */
	public function setAbuse($_abuse)
	{
		return ($this->abuse = $_abuse);
	}
	/**
	 * Get abuse
	 * @return string
	 */
	public function getAbuse()
	{
		return $this->abuse;
	}
	/**
	 * Set descr
	 * @param string descr
	 * @return string
	 */
	public function setDescr($_descr)
	{
		return ($this->descr = $_descr);
	}
	/**
	 * Get descr
	 * @return string
	 */
	public function getDescr()
	{
		return $this->descr;
	}
	/**
	 * Set phone
	 * @param string phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set fax
	 * @param string fax
	 * @return string
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
	}
	/**
	 * Get fax
	 * @return string
	 */
	public function getFax()
	{
		return $this->fax;
	}
	/**
	 * Set remarks
	 * @param string remarks
	 * @return string
	 */
	public function setRemarks($_remarks)
	{
		return ($this->remarks = $_remarks);
	}
	/**
	 * Get remarks
	 * @return string
	 */
	public function getRemarks()
	{
		return $this->remarks;
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