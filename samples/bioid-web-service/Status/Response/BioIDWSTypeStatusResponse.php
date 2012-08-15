<?php
/**
 * Class file for BioIDWSTypeStatusResponse
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeStatusResponse
 * @date 15/08/2012
 */
class BioIDWSTypeStatusResponse extends BioIDWSWsdlClass
{
	/**
	 * The StatusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $StatusResult;
	/**
	 * The status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $status;
	/**
	 * Constructor
	 * @param boolean StatusResult
	 * @param string status
	 * @return BioIDWSTypeStatusResponse
	 */
	public function __construct($_StatusResult = null,$_status = null)
	{
		parent::__construct(array('StatusResult'=>$_StatusResult,'status'=>$_status));
	}
	/**
	 * Set StatusResult
	 * @param boolean StatusResult
	 * @return boolean
	 */
	public function setStatusResult($_StatusResult)
	{
		return ($this->StatusResult = $_StatusResult);
	}
	/**
	 * Get StatusResult
	 * @return boolean
	 */
	public function getStatusResult()
	{
		return $this->StatusResult;
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
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