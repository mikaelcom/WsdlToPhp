<?php
/**
 * Class file for OvhTypeTelephonyPhonebookSharePeerStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookSharePeerStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookSharePeerStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The number
	 * @var string
	 */
	public $number;
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
	 * @param string number
	 * @param string name
	 * @param string mode
	 * @return OvhTypeTelephonyPhonebookSharePeerStruct
	 */
	public function __construct($_id = null,$_number = null,$_name = null,$_mode = null)
	{
		parent::__construct(array('id'=>$_id,'number'=>$_number,'name'=>$_name,'mode'=>$_mode));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
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