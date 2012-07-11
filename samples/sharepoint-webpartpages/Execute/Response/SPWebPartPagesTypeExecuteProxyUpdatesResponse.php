<?php
/**
 * Class file for SPWebPartPagesTypeExecuteProxyUpdatesResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeExecuteProxyUpdatesResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeExecuteProxyUpdatesResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The ExecuteProxyUpdatesResult
	 * @var string
	 */
	public $ExecuteProxyUpdatesResult;
	/**
	 * Constructor
	 * @param string ExecuteProxyUpdatesResult
	 * @return SPWebPartPagesTypeExecuteProxyUpdatesResponse
	 */
	public function __construct($_ExecuteProxyUpdatesResult = null)
	{
		parent::__construct(array('ExecuteProxyUpdatesResult'=>$_ExecuteProxyUpdatesResult));
	}
	/**
	 * Set ExecuteProxyUpdatesResult
	 * @param string ExecuteProxyUpdatesResult
	 * @return string
	 */
	public function setExecuteProxyUpdatesResult($_ExecuteProxyUpdatesResult)
	{
		return ($this->ExecuteProxyUpdatesResult = $_ExecuteProxyUpdatesResult);
	}
	/**
	 * Get ExecuteProxyUpdatesResult
	 * @return string
	 */
	public function getExecuteProxyUpdatesResult()
	{
		return $this->ExecuteProxyUpdatesResult;
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