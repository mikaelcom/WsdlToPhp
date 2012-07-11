<?php
/**
 * Class file for JmDataMovieAppTypeGetFavoriteStoreResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetFavoriteStoreResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetFavoriteStoreResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetFavoriteStoreResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfStore
	 */
	public $GetFavoriteStoreResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfStore GetFavoriteStoreResult
	 * @return JmDataMovieAppTypeGetFavoriteStoreResponse
	 */
	public function __construct($_GetFavoriteStoreResult = null)
	{
		parent::__construct(array('GetFavoriteStoreResult'=>new JmDataMovieAppTypeArrayOfStore($_GetFavoriteStoreResult)));
	}
	/**
	 * Set GetFavoriteStoreResult
	 * @param ArrayOfStore GetFavoriteStoreResult
	 * @return ArrayOfStore
	 */
	public function setGetFavoriteStoreResult($_GetFavoriteStoreResult)
	{
		return ($this->GetFavoriteStoreResult = $_GetFavoriteStoreResult);
	}
	/**
	 * Get GetFavoriteStoreResult
	 * @return JmDataMovieAppTypeArrayOfStore
	 */
	public function getGetFavoriteStoreResult()
	{
		return $this->GetFavoriteStoreResult;
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