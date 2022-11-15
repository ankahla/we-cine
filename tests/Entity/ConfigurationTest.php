<?php
namespace App\Tests\Entity;

use App\Entity\Configuration;
use PHPUnit\Framework\TestCase;

class ConfigurationTest extends TestCase
{
    /**
     * @dataProvider getProperties
     */
    public function testAccessors(string $property, $value)
    {
        $entity = new Configuration();

        $reflection = new \ReflectionProperty(Configuration::class, $property);
        $reflection->setAccessible(true);
        $reflection->setValue($entity, $value);

        $getterMethod = \is_bool($value) ? sprintf('is%s', ucfirst($property)) : sprintf('get%s', ucfirst($property));
        static::assertSame($value, $entity->$getterMethod());

        $setterMethod = sprintf('set%s', ucfirst($property));
        $entity->$setterMethod($value);

        $this->assertEquals($value, $reflection->getValue($entity));
    }

    public function getProperties(): array
    {
        return [
            'images property' => ['images', []],
        ];
    }

    public function testGetSecureBaseUrl()
    {
        $configuration = new Configuration();
        $reflection = new \ReflectionProperty(Configuration::class, 'images');
        $reflection->setAccessible(true);
        $reflection->setValue($configuration, ['secure_base_url' => 'http://imagehost.com']);

        static::assertSame('http://imagehost.com', $configuration->getSecureBaseUrl());
    }
}
