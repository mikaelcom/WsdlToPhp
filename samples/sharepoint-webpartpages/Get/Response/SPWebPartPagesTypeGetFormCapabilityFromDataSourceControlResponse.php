<?php
/**
 * Class file for SPWebPartPagesTypeGetFormCapabilityFromDataSourceControlResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetFormCapabilityFromDataSourceControlResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetFormCapabilityFromDataSourceControlResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetFormCapabilityFromDataSourceControlResult
	 * @var string
	 */
	public $GetFormCapabilityFromDataSourceControlResult;
	/**
	 * Constructor
	 * @param string GetFormCapabilityFromDataSourceControlResult
	 * @return SPWebPartPagesTypeGetFormCapabilityFromDataSourceControlResponse
	 */
	public function __construct($_GetFormCapabilityFromDataSourceControlResult = null)
	{
		parent::__construct(array('GetFormCapabilityFromDataSourceControlResult'=>$_GetFormCapabilityFromDataSourceControlResult));
	}
	/**
	 * Set GetFormCapabilityFromDataSourceControlResult
	 * @param string GetFormCapabilityFromDataSourceControlResult
	 * @return string
	 */
	public function setGetFormCapabilityFromDataSourceControlResult($_GetFormCapabilityFromDataSourceControlResult)
	{
		return ($this->GetFormCapabilityFromDataSourceControlResult = $_GetFormCapabilityFromDataSourceControlResult);
	}
	/**
	 * Get GetFormCapabilityFromDataSourceControlResult
	 * @return string
	 */
	public function getGetFormCapabilityFromDataSourceControlResult()
	{
		return $this->GetFormCapabilityFromDataSourceControlResult;
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