<?php
/**
 * Class file for RFUNSPSCTypeGetDetailsByCommodity
 * @date 15/08/2012
 */
/**
 * Class RFUNSPSCTypeGetDetailsByCommodity
 * @date 15/08/2012
 */
class RFUNSPSCTypeGetDetailsByCommodity extends RFUNSPSCWsdlClass
{
	/**
	 * The Commodity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Commodity;
	/**
	 * Constructor
	 * @param string Commodity
	 * @return RFUNSPSCTypeGetDetailsByCommodity
	 */
	public function __construct($_Commodity = null)
	{
		parent::__construct(array('Commodity'=>$_Commodity));
	}
	/**
	 * Set Commodity
	 * @param string Commodity
	 * @return string
	 */
	public function setCommodity($_Commodity)
	{
		return ($this->Commodity = $_Commodity);
	}
	/**
	 * Get Commodity
	 * @return string
	 */
	public function getCommodity()
	{
		return $this->Commodity;
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