<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByFamily
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByFamily
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByFamily extends RFUNSPSCWsdlClass
{
	/**
	 * The Family
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Family;
	/**
	 * Constructor
	 * @param string Family
	 * @return RFUNSPSCTypeGetDetailsByFamily
	 */
	public function __construct($_Family = null)
	{
		parent::__construct(array('Family'=>$_Family));
	}
	/**
	 * Set Family
	 * @param string Family
	 * @return string
	 */
	public function setFamily($_Family)
	{
		return ($this->Family = $_Family);
	}
	/**
	 * Get Family
	 * @return string
	 */
	public function getFamily()
	{
		return $this->Family;
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