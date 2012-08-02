<?php
/**
 * Class file for DirectSmileTypeDeleteJobByOrderIDResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeDeleteJobByOrderIDResponse
 * @date 02/08/2012
 */
class DirectSmileTypeDeleteJobByOrderIDResponse extends DirectSmileWsdlClass
{
	/**
	 * The DeleteJobByOrderIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeleteJobByOrderIDResult;
	/**
	 * Constructor
	 * @param string DeleteJobByOrderIDResult
	 * @return DirectSmileTypeDeleteJobByOrderIDResponse
	 */
	public function __construct($_DeleteJobByOrderIDResult = null)
	{
		parent::__construct(array('DeleteJobByOrderIDResult'=>$_DeleteJobByOrderIDResult));
	}
	/**
	 * Set DeleteJobByOrderIDResult
	 * @param string DeleteJobByOrderIDResult
	 * @return string
	 */
	public function setDeleteJobByOrderIDResult($_DeleteJobByOrderIDResult)
	{
		return ($this->DeleteJobByOrderIDResult = $_DeleteJobByOrderIDResult);
	}
	/**
	 * Get DeleteJobByOrderIDResult
	 * @return string
	 */
	public function getDeleteJobByOrderIDResult()
	{
		return $this->DeleteJobByOrderIDResult;
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