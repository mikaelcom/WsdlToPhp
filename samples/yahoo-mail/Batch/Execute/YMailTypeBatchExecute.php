<?php
/**
 * Class file for YMailTypeBatchExecute
 * @date 02/07/2012
 */
/**
 * Class YMailTypeBatchExecute
 * @date 02/07/2012
 */
class YMailTypeBatchExecute extends YMailWsdlClass
{
	/**
	 * The call
	 * Meta informations :
	 * 	- minOccurs : 2
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeBatchCall
	 */
	public $call;
	/**
	 * Constructor
	 * @param YMailTypeBatchCall call
	 * @return YMailTypeBatchExecute
	 */
	public function __construct($_call)
	{
		parent::__construct(array('call'=>$_call));
	}
	/**
	 * Set call
	 * @param BatchCall call
	 * @return BatchCall
	 */
	public function setCall($_call)
	{
		return ($this->call = $_call);
	}
	/**
	 * Get call
	 * @return YMailTypeBatchCall
	 */
	public function getCall()
	{
		return $this->call;
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