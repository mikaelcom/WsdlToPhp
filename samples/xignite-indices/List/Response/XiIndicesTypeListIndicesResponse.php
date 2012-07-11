<?php
/**
 * Class file for XiIndicesTypeListIndicesResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndicesResponse
 * @date 08/07/2012
 */
class XiIndicesTypeListIndicesResponse extends XiIndicesWsdlClass
{
	/**
	 * The ListIndicesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfSecurity
	 */
	public $ListIndicesResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfSecurity ListIndicesResult
	 * @return XiIndicesTypeListIndicesResponse
	 */
	public function __construct($_ListIndicesResult = null)
	{
		parent::__construct(array('ListIndicesResult'=>new XiIndicesTypeArrayOfSecurity($_ListIndicesResult)));
	}
	/**
	 * Set ListIndicesResult
	 * @param ArrayOfSecurity ListIndicesResult
	 * @return ArrayOfSecurity
	 */
	public function setListIndicesResult($_ListIndicesResult)
	{
		return ($this->ListIndicesResult = $_ListIndicesResult);
	}
	/**
	 * Get ListIndicesResult
	 * @return XiIndicesTypeArrayOfSecurity
	 */
	public function getListIndicesResult()
	{
		return $this->ListIndicesResult;
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