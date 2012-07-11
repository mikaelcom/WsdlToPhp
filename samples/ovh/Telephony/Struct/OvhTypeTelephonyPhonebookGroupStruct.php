<?php
/**
 * Class file for OvhTypeTelephonyPhonebookGroupStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyPhonebookGroupStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyPhonebookGroupStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The count
	 * @var int
	 */
	public $count;
	/**
	 * Constructor
	 * @param string name
	 * @param int count
	 * @return OvhTypeTelephonyPhonebookGroupStruct
	 */
	public function __construct($_name = null,$_count = null)
	{
		parent::__construct(array('name'=>$_name,'count'=>$_count));
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
	 * Set count
	 * @param int count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return int
	 */
	public function getCount()
	{
		return $this->count;
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