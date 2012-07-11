<?php
/**
 * Class file for XiIndicesTypeListAllIndicesResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListAllIndicesResponse
 * @date 08/07/2012
 */
class XiIndicesTypeListAllIndicesResponse extends XiIndicesWsdlClass
{
	/**
	 * The ListAllIndicesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexDescription
	 */
	public $ListAllIndicesResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndexDescription ListAllIndicesResult
	 * @return XiIndicesTypeListAllIndicesResponse
	 */
	public function __construct($_ListAllIndicesResult = null)
	{
		parent::__construct(array('ListAllIndicesResult'=>new XiIndicesTypeArrayOfIndexDescription($_ListAllIndicesResult)));
	}
	/**
	 * Set ListAllIndicesResult
	 * @param ArrayOfIndexDescription ListAllIndicesResult
	 * @return ArrayOfIndexDescription
	 */
	public function setListAllIndicesResult($_ListAllIndicesResult)
	{
		return ($this->ListAllIndicesResult = $_ListAllIndicesResult);
	}
	/**
	 * Get ListAllIndicesResult
	 * @return XiIndicesTypeArrayOfIndexDescription
	 */
	public function getListAllIndicesResult()
	{
		return $this->ListAllIndicesResult;
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