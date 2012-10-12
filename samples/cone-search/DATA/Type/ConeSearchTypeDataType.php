<?php
/**
 * Class file for ConeSearchTypeDataType
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeDataType
 * @date 13/10/2012
 */
class ConeSearchTypeDataType extends ConeSearchWsdlClass
{
	/**
	 * Constant for value 'boolean'
	 * @return string 'boolean'
	 */
	const VALUE_BOOLEAN = 'boolean';
	/**
	 * Constant for value 'bit'
	 * @return string 'bit'
	 */
	const VALUE_BIT = 'bit';
	/**
	 * Constant for value 'unsignedByte'
	 * @return string 'unsignedByte'
	 */
	const VALUE_UNSIGNEDBYTE = 'unsignedByte';
	/**
	 * Constant for value 'short'
	 * @return string 'short'
	 */
	const VALUE_SHORT = 'short';
	/**
	 * Constant for value 'int'
	 * @return string 'int'
	 */
	const VALUE_INT = 'int';
	/**
	 * Constant for value 'long'
	 * @return string 'long'
	 */
	const VALUE_LONG = 'long';
	/**
	 * Constant for value 'char'
	 * @return string 'char'
	 */
	const VALUE_CHAR = 'char';
	/**
	 * Constant for value 'unicodeChar'
	 * @return string 'unicodeChar'
	 */
	const VALUE_UNICODECHAR = 'unicodeChar';
	/**
	 * Constant for value 'float'
	 * @return string 'float'
	 */
	const VALUE_FLOAT = 'float';
	/**
	 * Constant for value 'double'
	 * @return string 'double'
	 */
	const VALUE_DOUBLE = 'double';
	/**
	 * Constant for value 'floatComplex'
	 * @return string 'floatComplex'
	 */
	const VALUE_FLOATCOMPLEX = 'floatComplex';
	/**
	 * Constant for value 'doubleComplex'
	 * @return string 'doubleComplex'
	 */
	const VALUE_DOUBLECOMPLEX = 'doubleComplex';
	/**
	 * Constructor
	 * @return ConeSearchTypeDataType
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
		return in_array($_value,array(self::VALUE_BOOLEAN,self::VALUE_BIT,self::VALUE_UNSIGNEDBYTE,self::VALUE_SHORT,self::VALUE_INT,self::VALUE_LONG,self::VALUE_CHAR,self::VALUE_UNICODECHAR,self::VALUE_FLOAT,self::VALUE_DOUBLE,self::VALUE_FLOATCOMPLEX,self::VALUE_DOUBLECOMPLEX));
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