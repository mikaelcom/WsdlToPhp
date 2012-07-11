<?php
/**
 * Class file for XiIndicesTypeListIndicesByFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndicesByFamilyResponse
 * @date 08/07/2012
 */
class XiIndicesTypeListIndicesByFamilyResponse extends XiIndicesWsdlClass
{
	/**
	 * The ListIndicesByFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexDescription
	 */
	public $ListIndicesByFamilyResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndexDescription ListIndicesByFamilyResult
	 * @return XiIndicesTypeListIndicesByFamilyResponse
	 */
	public function __construct($_ListIndicesByFamilyResult = null)
	{
		parent::__construct(array('ListIndicesByFamilyResult'=>new XiIndicesTypeArrayOfIndexDescription($_ListIndicesByFamilyResult)));
	}
	/**
	 * Set ListIndicesByFamilyResult
	 * @param ArrayOfIndexDescription ListIndicesByFamilyResult
	 * @return ArrayOfIndexDescription
	 */
	public function setListIndicesByFamilyResult($_ListIndicesByFamilyResult)
	{
		return ($this->ListIndicesByFamilyResult = $_ListIndicesByFamilyResult);
	}
	/**
	 * Get ListIndicesByFamilyResult
	 * @return XiIndicesTypeArrayOfIndexDescription
	 */
	public function getListIndicesByFamilyResult()
	{
		return $this->ListIndicesByFamilyResult;
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