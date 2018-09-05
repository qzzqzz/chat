<?php
/**
 * Created by PhpStorm.
 * User: zhaosen
 * Date: 2018/8/30
 * Time: 18:28
 */
namespace App\Doctrine\CustomTypes;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

/**
 * My custom datatype.
 */
class TinyIntegerType extends Type
{
    const TYPE = 'tinyInteger'; // modify to match your type name

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'tinyint';
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return new Money($value);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value->toDecimal();
    }

    public function getName()
    {
        return self::TYPE;
    }
}