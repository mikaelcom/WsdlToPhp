<?php
/**
 * Class file for OvhTypeTelephonyLineLogsListStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyLineLogsListStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyLineLogsListStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The msg
	 * @var string
	 */
	public $msg;
	/**
	 * Constructor
	 * @param string date
	 * @param string type
	 * @param string msg
	 * @return OvhTypeTelephonyLineLogsListStruct
	 */
	public function __construct($_date = null,$_type = null,$_msg = null)
	{
		parent::__construct(array('date'=>$_date,'type'=>$_type,'msg'=>$_msg));
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
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set msg
	 * @param string msg
	 * @return string
	 */
	public function setMsg($_msg)
	{
		return ($this->msg = $_msg);
	}
	/**
	 * Get msg
	 * @return string
	 */
	public function getMsg()
	{
		return $this->msg;
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