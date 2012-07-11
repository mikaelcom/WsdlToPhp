<?php
/**
 * Class file for JmDataMovieAppTypeGetCustomerCardResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetCustomerCardResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetCustomerCardResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetCustomerCardResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeCustomerCard
	 */
	public $GetCustomerCardResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeCustomerCard GetCustomerCardResult
	 * @return JmDataMovieAppTypeGetCustomerCardResponse
	 */
	public function __construct($_GetCustomerCardResult)
	{
		parent::__construct(array('GetCustomerCardResult'=>$_GetCustomerCardResult));
	}
	/**
	 * Set GetCustomerCardResult
	 * @param CustomerCard GetCustomerCardResult
	 * @return CustomerCard
	 */
	public function setGetCustomerCardResult($_GetCustomerCardResult)
	{
		return ($this->GetCustomerCardResult = $_GetCustomerCardResult);
	}
	/**
	 * Get GetCustomerCardResult
	 * @return JmDataMovieAppTypeCustomerCard
	 */
	public function getGetCustomerCardResult()
	{
		return $this->GetCustomerCardResult;
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