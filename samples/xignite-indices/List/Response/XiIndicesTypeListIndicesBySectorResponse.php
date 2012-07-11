<?php
/**
 * Class file for XiIndicesTypeListIndicesBySectorResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndicesBySectorResponse
 * @date 08/07/2012
 */
class XiIndicesTypeListIndicesBySectorResponse extends XiIndicesWsdlClass
{
	/**
	 * The ListIndicesBySectorResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexDescription
	 */
	public $ListIndicesBySectorResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndexDescription ListIndicesBySectorResult
	 * @return XiIndicesTypeListIndicesBySectorResponse
	 */
	public function __construct($_ListIndicesBySectorResult = null)
	{
		parent::__construct(array('ListIndicesBySectorResult'=>new XiIndicesTypeArrayOfIndexDescription($_ListIndicesBySectorResult)));
	}
	/**
	 * Set ListIndicesBySectorResult
	 * @param ArrayOfIndexDescription ListIndicesBySectorResult
	 * @return ArrayOfIndexDescription
	 */
	public function setListIndicesBySectorResult($_ListIndicesBySectorResult)
	{
		return ($this->ListIndicesBySectorResult = $_ListIndicesBySectorResult);
	}
	/**
	 * Get ListIndicesBySectorResult
	 * @return XiIndicesTypeArrayOfIndexDescription
	 */
	public function getListIndicesBySectorResult()
	{
		return $this->ListIndicesBySectorResult;
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