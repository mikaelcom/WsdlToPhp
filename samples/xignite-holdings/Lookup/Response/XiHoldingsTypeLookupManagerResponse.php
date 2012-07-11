<?php
/**
 * Class file for XiHoldingsTypeLookupManagerResponse
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeLookupManagerResponse
 * @date 08/07/2012
 */
class XiHoldingsTypeLookupManagerResponse extends XiHoldingsWsdlClass
{
	/**
	 * The LookupManagerResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeArrayOfManager
	 */
	public $LookupManagerResult;
	/**
	 * Constructor
	 * @param XiHoldingsTypeArrayOfManager LookupManagerResult
	 * @return XiHoldingsTypeLookupManagerResponse
	 */
	public function __construct($_LookupManagerResult = null)
	{
		parent::__construct(array('LookupManagerResult'=>new XiHoldingsTypeArrayOfManager($_LookupManagerResult)));
	}
	/**
	 * Set LookupManagerResult
	 * @param ArrayOfManager LookupManagerResult
	 * @return ArrayOfManager
	 */
	public function setLookupManagerResult($_LookupManagerResult)
	{
		return ($this->LookupManagerResult = $_LookupManagerResult);
	}
	/**
	 * Get LookupManagerResult
	 * @return XiHoldingsTypeArrayOfManager
	 */
	public function getLookupManagerResult()
	{
		return $this->LookupManagerResult;
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