<?php
/**
 * Class file for OvhTypeMessageDetailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMessageDetailStruct
 * @date 02/07/2012
 */
class OvhTypeMessageDetailStruct extends OvhWsdlClass
{
	/**
	 * The to
	 * @var string
	 */
	public $to;
	/**
	 * The from
	 * @var string
	 */
	public $from;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * Constructor
	 * @param string to
	 * @param string from
	 * @param string date
	 * @param string ip
	 * @param string type
	 * @param string message
	 * @return OvhTypeMessageDetailStruct
	 */
	public function __construct($_to = null,$_from = null,$_date = null,$_ip = null,$_type = null,$_message = null)
	{
		parent::__construct(array('to'=>$_to,'from'=>$_from,'date'=>$_date,'ip'=>$_ip,'type'=>$_type,'message'=>$_message));
	}
	/**
	 * Set to
	 * @param string to
	 * @return string
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get to
	 * @return string
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set from
	 * @param string from
	 * @return string
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get from
	 * @return string
	 */
	public function getFrom()
	{
		return $this->from;
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
	 * Set ip
	 * @param string ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get ip
	 * @return string
	 */
	public function getIp()
	{
		return $this->ip;
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
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
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