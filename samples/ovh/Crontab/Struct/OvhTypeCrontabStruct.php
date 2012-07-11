<?php
/**
 * Class file for OvhTypeCrontabStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeCrontabStruct
 * @date 02/07/2012
 */
class OvhTypeCrontabStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The desc
	 * @var string
	 */
	public $desc;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The enabled
	 * @var boolean
	 */
	public $enabled;
	/**
	 * Constructor
	 * @param int id
	 * @param string path
	 * @param string desc
	 * @param string email
	 * @param boolean enabled
	 * @return OvhTypeCrontabStruct
	 */
	public function __construct($_id = null,$_path = null,$_desc = null,$_email = null,$_enabled = null)
	{
		parent::__construct(array('id'=>$_id,'path'=>$_path,'desc'=>$_desc,'email'=>$_email,'enabled'=>$_enabled));
	}
	/**
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set path
	 * @param string path
	 * @return string
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get path
	 * @return string
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set desc
	 * @param string desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->desc = $_desc);
	}
	/**
	 * Get desc
	 * @return string
	 */
	public function getDesc()
	{
		return $this->desc;
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
	 * Set enabled
	 * @param boolean enabled
	 * @return boolean
	 */
	public function setEnabled($_enabled)
	{
		return ($this->enabled = $_enabled);
	}
	/**
	 * Get enabled
	 * @return boolean
	 */
	public function getEnabled()
	{
		return $this->enabled;
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