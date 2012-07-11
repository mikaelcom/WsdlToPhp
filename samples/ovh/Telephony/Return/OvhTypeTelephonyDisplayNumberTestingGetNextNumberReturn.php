<?php
/**
 * Class file for OvhTypeTelephonyDisplayNumberTestingGetNextNumberReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDisplayNumberTestingGetNextNumberReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyDisplayNumberTestingGetNextNumberReturn extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string number
	 * @param string id
	 * @return OvhTypeTelephonyDisplayNumberTestingGetNextNumberReturn
	 */
	public function __construct($_number = null,$_id = null)
	{
		parent::__construct(array('number'=>$_number,'id'=>$_id));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>