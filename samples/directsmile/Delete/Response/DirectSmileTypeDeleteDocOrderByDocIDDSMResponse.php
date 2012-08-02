<?php
/**
 * Class file for DirectSmileTypeDeleteDocOrderByDocIDDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeDeleteDocOrderByDocIDDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeDeleteDocOrderByDocIDDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The DeleteDocOrderByDocIDDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DeleteDocOrderByDocIDDSMResult;
	/**
	 * Constructor
	 * @param string DeleteDocOrderByDocIDDSMResult
	 * @return DirectSmileTypeDeleteDocOrderByDocIDDSMResponse
	 */
	public function __construct($_DeleteDocOrderByDocIDDSMResult = null)
	{
		parent::__construct(array('DeleteDocOrderByDocIDDSMResult'=>$_DeleteDocOrderByDocIDDSMResult));
	}
	/**
	 * Set DeleteDocOrderByDocIDDSMResult
	 * @param string DeleteDocOrderByDocIDDSMResult
	 * @return string
	 */
	public function setDeleteDocOrderByDocIDDSMResult($_DeleteDocOrderByDocIDDSMResult)
	{
		return ($this->DeleteDocOrderByDocIDDSMResult = $_DeleteDocOrderByDocIDDSMResult);
	}
	/**
	 * Get DeleteDocOrderByDocIDDSMResult
	 * @return string
	 */
	public function getDeleteDocOrderByDocIDDSMResult()
	{
		return $this->DeleteDocOrderByDocIDDSMResult;
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