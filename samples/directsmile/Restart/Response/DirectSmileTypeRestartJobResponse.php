<?php
/**
 * Class file for DirectSmileTypeRestartJobResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeRestartJobResponse
 * @date 02/08/2012
 */
class DirectSmileTypeRestartJobResponse extends DirectSmileWsdlClass
{
	/**
	 * The RestartJobResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RestartJobResult;
	/**
	 * Constructor
	 * @param string RestartJobResult
	 * @return DirectSmileTypeRestartJobResponse
	 */
	public function __construct($_RestartJobResult = null)
	{
		parent::__construct(array('RestartJobResult'=>$_RestartJobResult));
	}
	/**
	 * Set RestartJobResult
	 * @param string RestartJobResult
	 * @return string
	 */
	public function setRestartJobResult($_RestartJobResult)
	{
		return ($this->RestartJobResult = $_RestartJobResult);
	}
	/**
	 * Get RestartJobResult
	 * @return string
	 */
	public function getRestartJobResult()
	{
		return $this->RestartJobResult;
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