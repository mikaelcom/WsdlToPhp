<?php
/**
 * Class file for SPListDataRetrievalTypeArrayOfServerParameter
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeArrayOfServerParameter
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeArrayOfServerParameter extends SPListDataRetrievalWsdlClass
{
	/**
	 * The ServerParameter
	 * @var SPListDataRetrievalTypeServerParameter
	 */
	public $ServerParameter;
	/**
	 * Constructor
	 * @param SPListDataRetrievalTypeServerParameter ServerParameter
	 * @return SPListDataRetrievalTypeArrayOfServerParameter
	 */
	public function __construct($_ServerParameter = null)
	{
		parent::__construct(array('ServerParameter'=>$_ServerParameter));
	}
	/**
	 * Set ServerParameter
	 * @param ServerParameter ServerParameter
	 * @return ServerParameter
	 */
	public function setServerParameter($_ServerParameter)
	{
		return ($this->ServerParameter = $_ServerParameter);
	}
	/**
	 * Get ServerParameter
	 * @return SPListDataRetrievalTypeServerParameter
	 */
	public function getServerParameter()
	{
		return $this->ServerParameter;
	}
	/**
	 * Returns the current element
	 * @see SPListDataRetrievalWsdlClass::current()
	 * @return SPListDataRetrievalTypeServerParameter
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPListDataRetrievalWsdlClass::item()
	 * @param int
	 * @return SPListDataRetrievalTypeServerParameter
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPListDataRetrievalWsdlClass::first()
	 * @return SPListDataRetrievalTypeServerParameter
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPListDataRetrievalWsdlClass::last()
	 * @return SPListDataRetrievalTypeServerParameter
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPListDataRetrievalWsdlClass::offsetGet()
	 * @param int
	 * @return SPListDataRetrievalTypeServerParameter
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ServerParameter'
	 */
	public function getAttributeName()
	{
		return 'ServerParameter';
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