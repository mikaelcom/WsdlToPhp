<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByClass
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByClass
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByClass extends RFUNSPSCWsdlClass
{
	/**
	 * The Class
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Class;
	/**
	 * Constructor
	 * @param string Class
	 * @return RFUNSPSCTypeGetDetailsByClass
	 */
	public function __construct($_Class = null)
	{
		parent::__construct(array('Class'=>$_Class));
	}
	/**
	 * Set Class
	 * @param string Class
	 * @return string
	 */
	public function setClass($_Class)
	{
		return ($this->Class = $_Class);
	}
	/**
	 * Get Class
	 * @return string
	 */
	public function getClass()
	{
		return $this->Class;
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