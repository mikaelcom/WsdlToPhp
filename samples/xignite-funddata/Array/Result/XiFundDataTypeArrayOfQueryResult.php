<?php
/**
 * Class file for XiFundDataTypeArrayOfQueryResult
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeArrayOfQueryResult
 * @date 08/07/2012
 */
class XiFundDataTypeArrayOfQueryResult extends XiFundDataWsdlClass
{
	/**
	 * The QueryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiFundDataTypeQueryResult
	 */
	public $QueryResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeQueryResult QueryResult
	 * @return XiFundDataTypeArrayOfQueryResult
	 */
	public function __construct($_QueryResult = null)
	{
		parent::__construct(array('QueryResult'=>$_QueryResult));
	}
	/**
	 * Set QueryResult
	 * @param QueryResult QueryResult
	 * @return QueryResult
	 */
	public function setQueryResult($_QueryResult)
	{
		return ($this->QueryResult = $_QueryResult);
	}
	/**
	 * Get QueryResult
	 * @return XiFundDataTypeQueryResult
	 */
	public function getQueryResult()
	{
		return $this->QueryResult;
	}
	/**
	 * Returns the current element
	 * @see XiFundDataWsdlClass::current()
	 * @return XiFundDataTypeQueryResult
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiFundDataWsdlClass::item()
	 * @param int
	 * @return XiFundDataTypeQueryResult
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::first()
	 * @return XiFundDataTypeQueryResult
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::last()
	 * @return XiFundDataTypeQueryResult
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiFundDataWsdlClass::offsetGet()
	 * @param int
	 * @return XiFundDataTypeQueryResult
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'QueryResult'
	 */
	public function getAttributeName()
	{
		return 'QueryResult';
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