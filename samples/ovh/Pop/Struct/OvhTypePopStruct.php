<?php
/**
 * Class file for OvhTypePopStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypePopStruct
 * @date 02/07/2012
 */
class OvhTypePopStruct extends OvhWsdlClass
{
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The size
	 * @var string
	 */
	public $size;
	/**
	 * Constructor
	 * @param string nic
	 * @param string domain
	 * @param string name
	 * @param string description
	 * @param string size
	 * @return OvhTypePopStruct
	 */
	public function __construct($_nic = null,$_domain = null,$_name = null,$_description = null,$_size = null)
	{
		parent::__construct(array('nic'=>$_nic,'domain'=>$_domain,'name'=>$_name,'description'=>$_description,'size'=>$_size));
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
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
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
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set size
	 * @param string size
	 * @return string
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return string
	 */
	public function getSize()
	{
		return $this->size;
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