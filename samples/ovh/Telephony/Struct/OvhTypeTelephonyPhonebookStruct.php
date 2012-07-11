<?php
/**
 * Class file for OvhTypeTelephonyPhonebookStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The mode
	 * @var string
	 */
	public $mode;
	/**
	 * Constructor
	 * @param int id
	 * @param string name
	 * @param string mode
	 * @return OvhTypeTelephonyPhonebookStruct
	 */
	public function __construct($_id = null,$_name = null,$_mode = null)
	{
		parent::__construct(array('id'=>$_id,'name'=>$_name,'mode'=>$_mode));
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
	 * Set mode
	 * @param string mode
	 * @return string
	 */
	public function setMode($_mode)
	{
		return ($this->mode = $_mode);
	}
	/**
	 * Get mode
	 * @return string
	 */
	public function getMode()
	{
		return $this->mode;
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