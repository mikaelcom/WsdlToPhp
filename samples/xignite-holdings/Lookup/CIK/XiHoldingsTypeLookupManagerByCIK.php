<?php
/**
 * Class file for XiHoldingsTypeLookupManagerByCIK
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeLookupManagerByCIK
 * @date 08/07/2012
 */
class XiHoldingsTypeLookupManagerByCIK extends XiHoldingsWsdlClass
{
	/**
	 * The CIK
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CIK;
	/**
	 * Constructor
	 * @param string CIK
	 * @return XiHoldingsTypeLookupManagerByCIK
	 */
	public function __construct($_CIK = null)
	{
		parent::__construct(array('CIK'=>$_CIK));
	}
	/**
	 * Set CIK
	 * @param string CIK
	 * @return string
	 */
	public function setCIK($_CIK)
	{
		return ($this->CIK = $_CIK);
	}
	/**
	 * Get CIK
	 * @return string
	 */
	public function getCIK()
	{
		return $this->CIK;
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