<?php
/**
 * Class file for JmDataMovieAppTypeReserveMovieResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeReserveMovieResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeReserveMovieResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The ReserveMovieResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReserveMovieResult;
	/**
	 * Constructor
	 * @param string ReserveMovieResult
	 * @return JmDataMovieAppTypeReserveMovieResponse
	 */
	public function __construct($_ReserveMovieResult = null)
	{
		parent::__construct(array('ReserveMovieResult'=>$_ReserveMovieResult));
	}
	/**
	 * Set ReserveMovieResult
	 * @param string ReserveMovieResult
	 * @return string
	 */
	public function setReserveMovieResult($_ReserveMovieResult)
	{
		return ($this->ReserveMovieResult = $_ReserveMovieResult);
	}
	/**
	 * Get ReserveMovieResult
	 * @return string
	 */
	public function getReserveMovieResult()
	{
		return $this->ReserveMovieResult;
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