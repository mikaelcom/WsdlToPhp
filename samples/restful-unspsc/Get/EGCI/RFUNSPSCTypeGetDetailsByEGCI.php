<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByEGCI
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByEGCI
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByEGCI extends RFUNSPSCWsdlClass
{
	/**
	 * The EGCI
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $EGCI;
	/**
	 * Constructor
	 * @param string EGCI
	 * @return RFUNSPSCTypeGetDetailsByEGCI
	 */
	public function __construct($_EGCI = null)
	{
		parent::__construct(array('EGCI'=>$_EGCI));
	}
	/**
	 * Set EGCI
	 * @param string EGCI
	 * @return string
	 */
	public function setEGCI($_EGCI)
	{
		return ($this->EGCI = $_EGCI);
	}
	/**
	 * Get EGCI
	 * @return string
	 */
	public function getEGCI()
	{
		return $this->EGCI;
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