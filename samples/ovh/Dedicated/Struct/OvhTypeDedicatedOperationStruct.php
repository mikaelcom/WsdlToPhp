<?php
/**
 * Class file for OvhTypeDedicatedOperationStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedOperationStruct
 * @date 02/07/2012
 */
class OvhTypeDedicatedOperationStruct extends OvhWsdlClass
{
	/**
	 * The designation
	 * @var string
	 */
	public $designation;
	/**
	 * The id_designation
	 * @var int
	 */
	public $id_designation;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The level
	 * @var int
	 */
	public $level;
	/**
	 * Constructor
	 * @param string designation
	 * @param int id_designation
	 * @param string date
	 * @param int level
	 * @return OvhTypeDedicatedOperationStruct
	 */
	public function __construct($_designation = null,$_id_designation = null,$_date = null,$_level = null)
	{
		parent::__construct(array('designation'=>$_designation,'id_designation'=>$_id_designation,'date'=>$_date,'level'=>$_level));
	}
	/**
	 * Set designation
	 * @param string designation
	 * @return string
	 */
	public function setDesignation($_designation)
	{
		return ($this->designation = $_designation);
	}
	/**
	 * Get designation
	 * @return string
	 */
	public function getDesignation()
	{
		return $this->designation;
	}
	/**
	 * Set id_designation
	 * @param int id_designation
	 * @return int
	 */
	public function setId_designation($_id_designation)
	{
		return ($this->id_designation = $_id_designation);
	}
	/**
	 * Get id_designation
	 * @return int
	 */
	public function getId_designation()
	{
		return $this->id_designation;
	}
	/**
	 * Set date
	 * @param string date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return string
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set level
	 * @param int level
	 * @return int
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Get level
	 * @return int
	 */
	public function getLevel()
	{
		return $this->level;
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