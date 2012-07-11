<?php
/**
 * Class file for XiIndexComponentsTypeGetIndexComponentsResponse
 * @date 08/07/2012
 */
/**
 * Class XiIndexComponentsTypeGetIndexComponentsResponse
 * @date 08/07/2012
 */
class XiIndexComponentsTypeGetIndexComponentsResponse extends XiIndexComponentsWsdlClass
{
	/**
	 * The GetIndexComponentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiIndexComponentsTypeComponents
	 */
	public $GetIndexComponentsResult;
	/**
	 * Constructor
	 * @param XiIndexComponentsTypeComponents GetIndexComponentsResult
	 * @return XiIndexComponentsTypeGetIndexComponentsResponse
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
	 * @return XiIndexComponentsTypeComponents
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