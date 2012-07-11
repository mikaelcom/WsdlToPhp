<?php
/**
 * Class file for YMailTypeEmptyFolderResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeEmptyFolderResponse
 * @date 02/07/2012
 */
class YMailTypeEmptyFolderResponse extends YMailWsdlClass
{
	/**
	 * Constructor
	 * @return YMailTypeEmptyFolderResponse
	 */
	public function __construct()
	{
		parent::__construct(array());
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