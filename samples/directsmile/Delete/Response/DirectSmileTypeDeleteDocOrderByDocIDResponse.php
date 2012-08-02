<?php
/**
 * Class file for DirectSmileTypeDeleteDocOrderByDocIDResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeDeleteDocOrderByDocIDResponse
 * @date 02/08/2012
 */
class DirectSmileTypeDeleteDocOrderByDocIDResponse extends DirectSmileWsdlClass
{
	/**
	 * The DeleteDocOrderByDocIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeleteDocOrderByDocIDResult;
	/**
	 * Constructor
	 * @param string DeleteDocOrderByDocIDResult
	 * @return DirectSmileTypeDeleteDocOrderByDocIDResponse
	 */
	public function __construct($_DeleteDocOrderByDocIDResult = null)
	{
		parent::__construct(array('DeleteDocOrderByDocIDResult'=>$_DeleteDocOrderByDocIDResult));
	}
	/**
	 * Set DeleteDocOrderByDocIDResult
	 * @param string DeleteDocOrderByDocIDResult
	 * @return string
	 */
	public function setDeleteDocOrderByDocIDResult($_DeleteDocOrderByDocIDResult)
	{
		return ($this->DeleteDocOrderByDocIDResult = $_DeleteDocOrderByDocIDResult);
	}
	/**
	 * Get DeleteDocOrderByDocIDResult
	 * @return string
	 */
	public function getDeleteDocOrderByDocIDResult()
	{
		return $this->DeleteDocOrderByDocIDResult;
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