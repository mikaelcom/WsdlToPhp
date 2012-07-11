<?php
/**
 * Class file for XWebOrderStatusTypeSerialInfo
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeSerialInfo
 * @date 09/07/2012
 */
class XWebOrderStatusTypeSerialInfo extends XWebOrderStatusWsdlClass
{
	/**
	 * The SerialNbr
	 * @var SerialNbr
	 */
	public $SerialNbr;
	/**
	 * Constructor
	 * @param SerialNbr SerialNbr
	 * @return XWebOrderStatusTypeSerialInfo
	 */
	public function __construct($_SerialNbr = null)
	{
		parent::__construct(array('SerialNbr'=>$_SerialNbr));
	}
	/**
	 * Set SerialNbr
	 * @param SerialNbr SerialNbr
	 * @return SerialNbr
	 */
	public function setSerialNbr($_SerialNbr)
	{
		return ($this->SerialNbr = $_SerialNbr);
	}
	/**
	 * Get SerialNbr
	 * @return SerialNbr
	 */
	public function getSerialNbr()
	{
		return $this->SerialNbr;
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