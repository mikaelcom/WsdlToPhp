<?php
/**
 * Class file for XiIndicesTypeGetIndexComponentsResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndicesTypeGetIndexComponentsResponse
 * @date 08/07/2012
 */
class XiIndicesTypeGetIndexComponentsResponse extends XiIndicesWsdlClass
{
	/**
	 * The GetIndexComponentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndicesTypeComponents
	 */
	public $GetIndexComponentsResult;
	/**
	 * Constructor
	 * @param XiIndicesTypeComponents GetIndexComponentsResult
	 * @return XiIndicesTypeGetIndexComponentsResponse
	 */
	public function __construct($_GetIndexComponentsResult = null)
	{
		parent::__construct(array('GetIndexComponentsResult'=>$_GetIndexComponentsResult));
	}
	/**
	 * Set GetIndexComponentsResult
	 * @param Components GetIndexComponentsResult
	 * @return Components
	 */
	public function setGetIndexComponentsResult($_GetIndexComponentsResult)
	{
		return ($this->GetIndexComponentsResult = $_GetIndexComponentsResult);
	}
	/**
	 * Get GetIndexComponentsResult
	 * @return XiIndicesTypeComponents
	 */
	public function getGetIndexComponentsResult()
	{
		return $this->GetIndexComponentsResult;
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