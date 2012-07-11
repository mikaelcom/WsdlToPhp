<?php
/**
 * Class file for XiFundamentalsTypeListExtendedValuesResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeListExtendedValuesResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeListExtendedValuesResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The ListExtendedValuesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeArrayOfExtendedValue
	 */
	public $ListExtendedValuesResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeArrayOfExtendedValue ListExtendedValuesResult
	 * @return XiFundamentalsTypeListExtendedValuesResponse
	 */
	public function __construct($_ListExtendedValuesResult = null)
	{
		parent::__construct(array('ListExtendedValuesResult'=>new XiFundamentalsTypeArrayOfExtendedValue($_ListExtendedValuesResult)));
	}
	/**
	 * Set ListExtendedValuesResult
	 * @param ArrayOfExtendedValue ListExtendedValuesResult
	 * @return ArrayOfExtendedValue
	 */
	public function setListExtendedValuesResult($_ListExtendedValuesResult)
	{
		return ($this->ListExtendedValuesResult = $_ListExtendedValuesResult);
	}
	/**
	 * Get ListExtendedValuesResult
	 * @return XiFundamentalsTypeArrayOfExtendedValue
	 */
	public function getListExtendedValuesResult()
	{
		return $this->ListExtendedValuesResult;
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