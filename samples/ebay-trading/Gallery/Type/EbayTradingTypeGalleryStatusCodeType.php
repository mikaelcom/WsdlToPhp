<?php
/**
 * Class file for EbayTradingTypeGalleryStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGalleryStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeGalleryStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Success'
	 * Meta informations :
	 * 	- documentation : Gallery Image successfully generated.
	 * @return string 'Success'
	 */
	const VALUE_SUCCESS = 'Success';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : Gallery image has not yet been generated.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'InvalidUrl'
	 * Meta informations :
	 * 	- documentation : The URL for the image is not valid.
	 * @return string 'InvalidUrl'
	 */
	const VALUE_INVALIDURL = 'InvalidUrl';
	/**
	 * Constant for value 'InvalidProtocol'
	 * Meta informations :
	 * 	- documentation : URL does not start with http:// - That is the only protocol currently supported for pictures.
	 * @return string 'InvalidProtocol'
	 */
	const VALUE_INVALIDPROTOCOL = 'InvalidProtocol';
	/**
	 * Constant for value 'InvalidFile'
	 * Meta informations :
	 * 	- documentation : There is a problem with the file containing the image.
	 * @return string 'InvalidFile'
	 */
	const VALUE_INVALIDFILE = 'InvalidFile';
	/**
	 * Constant for value 'ServerDown'
	 * Meta informations :
	 * 	- documentation : The server containing your image was unavailable when we tried to retrieve it.
	 * @return string 'ServerDown'
	 */
	const VALUE_SERVERDOWN = 'ServerDown';
	/**
	 * Constant for value 'ImageNonExistent'
	 * Meta informations :
	 * 	- documentation : We could not find your Gallery image when we went to retrieve it.
	 * @return string 'ImageNonExistent'
	 */
	const VALUE_IMAGENONEXISTENT = 'ImageNonExistent';
	/**
	 * Constant for value 'ImageReadTimeOut'
	 * Meta informations :
	 * 	- documentation : The image failed to come across the Internet when we tried to retrieve it.
	 * @return string 'ImageReadTimeOut'
	 */
	const VALUE_IMAGEREADTIMEOUT = 'ImageReadTimeOut';
	/**
	 * Constant for value 'InvalidFileFormat'
	 * Meta informations :
	 * 	- documentation : The file containing your image is not in standard jpeg, bmp, or tif format.
	 * @return string 'InvalidFileFormat'
	 */
	const VALUE_INVALIDFILEFORMAT = 'InvalidFileFormat';
	/**
	 * Constant for value 'ImageProcessingError'
	 * Meta informations :
	 * 	- documentation : We were not able to process the image.
	 * @return string 'ImageProcessingError'
	 */
	const VALUE_IMAGEPROCESSINGERROR = 'ImageProcessingError';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeGalleryStatusCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_SUCCESS,self::VALUE_PENDING,self::VALUE_INVALIDURL,self::VALUE_INVALIDPROTOCOL,self::VALUE_INVALIDFILE,self::VALUE_SERVERDOWN,self::VALUE_IMAGENONEXISTENT,self::VALUE_IMAGEREADTIMEOUT,self::VALUE_INVALIDFILEFORMAT,self::VALUE_IMAGEPROCESSINGERROR,self::VALUE_CUSTOMCODE));
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