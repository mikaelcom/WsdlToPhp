<?php
/**
 * Class file for XWebOrderStatusTypeRequestDateInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeRequestDateInfoType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeRequestDateInfoType extends XWebOrderStatusWsdlClass
{
	/**
	 * The DateTimeQual
	 * @var DateTimeQual
	 */
	public $DateTimeQual;
	/**
	 * The DateFrom
	 * @var DateFrom
	 */
	public $DateFrom;
	/**
	 * The DateTo
	 * @var DateTo
	 */
	public $DateTo;
	/**
	 * Constructor
	 * @param DateTimeQual DateTimeQual
	 * @param DateFrom DateFrom
	 * @param DateTo DateTo
	 * @return XWebOrderStatusTypeRequestDateInfoType
	 */
	public function __construct($_DateTimeQual = null,$_DateFrom = null,$_DateTo = null)
	{
		parent::__construct(array('DateTimeQual'=>$_DateTimeQual,'DateFrom'=>$_DateFrom,'DateTo'=>$_DateTo));
	}
	/**
	 * Set DateTimeQual
	 * @param DateTimeQual DateTimeQual
	 * @return DateTimeQual
	 */
	public function setDateTimeQual($_DateTimeQual)
	{
		return ($this->DateTimeQual = $_DateTimeQual);
	}
	/**
	 * Get DateTimeQual
	 * @return DateTimeQual
	 */
	public function getDateTimeQual()
	{
		return $this->DateTimeQual;
	}
	/**
	 * Set DateFrom
	 * @param DateFrom DateFrom
	 * @return DateFrom
	 */
	public function setDateFrom($_DateFrom)
	{
		return ($this->DateFrom = $_DateFrom);
	}
	/**
	 * Get DateFrom
	 * @return DateFrom
	 */
	public function getDateFrom()
	{
		return $this->DateFrom;
	}
	/**
	 * Set DateTo
	 * @param DateTo DateTo
	 * @return DateTo
	 */
	public function setDateTo($_DateTo)
	{
		return ($this->DateTo = $_DateTo);
	}
	/**
	 * Get DateTo
	 * @return DateTo
	 */
	public function getDateTo()
	{
		return $this->DateTo;
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