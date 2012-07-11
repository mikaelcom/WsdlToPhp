<?php
/**
 * Class file for OvhTypeTelephonySmsSenderStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonySmsSenderStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonySmsSenderStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string number
	 * @param string status
	 * @param string description
	 * @return OvhTypeTelephonySmsSenderStruct
	 */
	public function __construct($_number = null,$_status = null,$_description = null)
	{
		parent::__construct(array('number'=>$_number,'status'=>$_status,'description'=>$_description));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>