<?php
/**
 * Class file for OvhTypeTelephonySmsCsvSlotStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsCsvSlotStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsCsvSlotStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The records
	 * @var string
	 */
	public $records;
	/**
	 * Constructor
	 * @param string id
	 * @param string name
	 * @param string date
	 * @param string records
	 * @return OvhTypeTelephonySmsCsvSlotStruct
	 */
	public function __construct($_id = null,$_name = null,$_date = null,$_records = null)
	{
		parent::__construct(array('id'=>$_id,'name'=>$_name,'date'=>$_date,'records'=>$_records));
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
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
	 * Set records
	 * @param string records
	 * @return string
	 */
	public function setRecords($_records)
	{
		return ($this->records = $_records);
	}
	/**
	 * Get records
	 * @return string
	 */
	public function getRecords()
	{
		return $this->records;
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