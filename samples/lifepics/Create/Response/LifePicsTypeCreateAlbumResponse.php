<?php
/**
 * Class file for LifePicsTypeCreateAlbumResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCreateAlbumResponse
 * @date 02/08/2012
 */
class LifePicsTypeCreateAlbumResponse extends LifePicsWsdlClass
{
	/**
	 * The CreateAlbumResult
	 * @var LifePicsTypeCreateAlbumResult
	 */
	public $CreateAlbumResult;
	/**
	 * Constructor
	 * @param LifePicsTypeCreateAlbumResult CreateAlbumResult
	 * @return LifePicsTypeCreateAlbumResponse
	 */
	public function __construct($_CreateAlbumResult = null)
	{
		parent::__construct(array('CreateAlbumResult'=>$_CreateAlbumResult));
	}
	/**
	 * Set CreateAlbumResult
	 * @param CreateAlbumResult CreateAlbumResult
	 * @return CreateAlbumResult
	 */
	public function setCreateAlbumResult($_CreateAlbumResult)
	{
		return ($this->CreateAlbumResult = $_CreateAlbumResult);
	}
	/**
	 * Get CreateAlbumResult
	 * @return LifePicsTypeCreateAlbumResult
	 */
	public function getCreateAlbumResult()
	{
		return $this->CreateAlbumResult;
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