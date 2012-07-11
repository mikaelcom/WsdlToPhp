<?php
/**
 * Class file for OvhTypeRipeInetnumStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeInetnumStruct
 * @date 02/07/2012
 */
class OvhTypeRipeInetnumStruct extends OvhWsdlClass
{
	/**
	 * The inetnum
	 * @var string
	 */
	public $inetnum;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * The descr
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $descr;
	/**
	 * The org
	 * @var string
	 */
	public $org;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The adminc
	 * @var string
	 */
	public $adminc;
	/**
	 * The techc
	 * @var string
	 */
	public $techc;
	/**
	 * The status
	 * @var string
	 */
	public $status;
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
	 * @param string inetnum
	 * @param string netname
	 * @param OvhTypeMyArrayOfStringType descr
	 * @param string org
	 * @param string country
	 * @param string adminc
	 * @param string techc
	 * @param string status
	 * @param string mntby
	 * @param string changed
	 * @param string source
	 * @return OvhTypeRipeInetnumStruct
	 */
	public function __construct($_inetnum = null,$_netname = null,$_descr = null,$_org = null,$_country = null,$_adminc = null,$_techc = null,$_status = null,$_mntby = null,$_changed = null,$_source = null)
	{
		parent::__construct(array('inetnum'=>$_inetnum,'netname'=>$_netname,'descr'=>new OvhTypeMyArrayOfStringType($_descr),'org'=>$_org,'country'=>$_country,'adminc'=>$_adminc,'techc'=>$_techc,'status'=>$_status,'mntby'=>$_mntby,'changed'=>$_changed,'source'=>$_source));
	}
	/**
	 * Set inetnum
	 * @param string inetnum
	 * @return string
	 */
	public function setInetnum($_inetnum)
	{
		return ($this->inetnum = $_inetnum);
	}
	/**
	 * Get inetnum
	 * @return string
	 */
	public function getInetnum()
	{
		return $this->inetnum;
	}
	/**
	 * Set netname
	 * @param string netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get netname
	 * @return string
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set descr
	 * @param MyArrayOfStringType descr
	 * @return MyArrayOfStringType
	 */
	public function setDescr($_descr)
	{
		return ($this->descr = $_descr);
	}
	/**
	 * Get descr
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getDescr()
	{
		return $this->descr;
	}
	/**
	 * Set org
	 * @param string org
	 * @return string
	 */
	public function setOrg($_org)
	{
		return ($this->org = $_org);
	}
	/**
	 * Get org
	 * @return string
	 */
	public function getOrg()
	{
		return $this->org;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set adminc
	 * @param string adminc
	 * @return string
	 */
	public function setAdminc($_adminc)
	{
		return ($this->adminc = $_adminc);
	}
	/**
	 * Get adminc
	 * @return string
	 */
	public function getAdminc()
	{
		return $this->adminc;
	}
	/**
	 * Set techc
	 * @param string techc
	 * @return string
	 */
	public function setTechc($_techc)
	{
		return ($this->techc = $_techc);
	}
	/**
	 * Get techc
	 * @return string
	 */
	public function getTechc()
	{
		return $this->techc;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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