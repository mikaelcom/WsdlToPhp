<?php
/**
 * Class file for XiIndicesTypeListIndicesByCountryResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeListIndicesByCountryResponse
 * @date 08/07/2012
 */
class XiIndicesTypeListIndicesByCountryResponse extends XiIndicesWsdlClass
{
	/**
	 * The ListIndicesByCountryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeArrayOfIndexDescription
	 */
	public $ListIndicesByCountryResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeArrayOfIndexDescription ListIndicesByCountryResult
	 * @return XiIndicesTypeListIndicesByCountryResponse
	 */
	public function __construct($_ListIndicesByCountryResult = null)
	{
		parent::__construct(array('ListIndicesByCountryResult'=>new XiIndicesTypeArrayOfIndexDescription($_ListIndicesByCountryResult)));
	}
	/**
	 * Set ListIndicesByCountryResult
	 * @param ArrayOfIndexDescription ListIndicesByCountryResult
	 * @return ArrayOfIndexDescription
	 */
	public function setListIndicesByCountryResult($_ListIndicesByCountryResult)
	{
		return ($this->ListIndicesByCountryResult = $_ListIndicesByCountryResult);
	}
	/**
	 * Get ListIndicesByCountryResult
	 * @return XiIndicesTypeArrayOfIndexDescription
	 */
	public function getListIndicesByCountryResult()
	{
		return $this->ListIndicesByCountryResult;
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