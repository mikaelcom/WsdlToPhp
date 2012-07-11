<?php
/**
 * Class file for OvhTypeAutomatedMailGetErrorsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetErrorsStruct
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetErrorsStruct extends OvhWsdlClass
{
	/**
	 * The to
	 * @var string
	 */
	public $to;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The message
	 * @var string
	 */
	public $message;
	/**
	 * Constructor
	 * @param string to
	 * @param int total
	 * @param string date
	 * @param string message
	 * @return OvhTypeAutomatedMailGetErrorsStruct
	 */
	public function __construct($_to = null,$_total = null,$_date = null,$_message = null)
	{
		parent::__construct(array('to'=>$_to,'total'=>$_total,'date'=>$_date,'message'=>$_message));
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
	 * Set total
	 * @param int total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get total
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
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