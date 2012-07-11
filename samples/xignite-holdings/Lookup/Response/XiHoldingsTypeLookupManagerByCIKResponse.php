<?php
/**
 * Class file for XiHoldingsTypeLookupManagerByCIKResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeLookupManagerByCIKResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeLookupManagerByCIKResponse extends XiHoldingsWsdlClass
{
	/**
	 * The LookupManagerByCIKResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeManager
	 */
	public $LookupManagerByCIKResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeManager LookupManagerByCIKResult
	 * @return XiHoldingsTypeLookupManagerByCIKResponse
	 */
	public function __construct($_LookupManagerByCIKResult = null)
	{
		parent::__construct(array('LookupManagerByCIKResult'=>$_LookupManagerByCIKResult));
	}
	/**
	 * Set LookupManagerByCIKResult
	 * @param Manager LookupManagerByCIKResult
	 * @return Manager
	 */
	public function setLookupManagerByCIKResult($_LookupManagerByCIKResult)
	{
		return ($this->LookupManagerByCIKResult = $_LookupManagerByCIKResult);
	}
	/**
	 * Get LookupManagerByCIKResult
	 * @return XiHoldingsTypeManager
	 */
	public function getLookupManagerByCIKResult()
	{
		return $this->LookupManagerByCIKResult;
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