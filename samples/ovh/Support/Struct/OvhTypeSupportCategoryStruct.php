<?php
/**
 * Class file for OvhTypeSupportCategoryStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeSupportCategoryStruct
 * @date 02/07/2012
 */
class OvhTypeSupportCategoryStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * Constructor
	 * @param string name
	 * @param int id
	 * @return OvhTypeSupportCategoryStruct
	 */
	public function __construct($_name = null,$_id = null)
	{
		parent::__construct(array('name'=>$_name,'id'=>$_id));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>