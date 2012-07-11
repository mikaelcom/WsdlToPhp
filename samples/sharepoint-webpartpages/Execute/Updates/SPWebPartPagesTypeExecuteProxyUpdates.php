<?php
/**
 * Class file for SPWebPartPagesTypeExecuteProxyUpdates
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeExecuteProxyUpdates
 * @date 06/07/2012
 */
class SPWebPartPagesTypeExecuteProxyUpdates extends SPWebPartPagesWsdlClass
{
	/**
	 * The updateData
	 * @var string
	 */
	public $updateData;
	/**
	 * Constructor
	 * @param string updateData
	 * @return SPWebPartPagesTypeExecuteProxyUpdates
	 */
	public function __construct($_updateData = null)
	{
		parent::__construct(array('updateData'=>$_updateData));
	}
	/**
	 * Set updateData
	 * @param string updateData
	 * @return string
	 */
	public function setUpdateData($_updateData)
	{
		return ($this->updateData = $_updateData);
	}
	/**
	 * Get updateData
	 * @return string
	 */
	public function getUpdateData()
	{
		return $this->updateData;
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