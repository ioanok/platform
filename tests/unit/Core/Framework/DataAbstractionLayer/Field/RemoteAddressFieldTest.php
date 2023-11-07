<?php declare(strict_types=1);

namespace Shopware\Tests\Unit\Core\Framework\DataAbstractionLayer\Field;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\DataAbstractionLayer\Field\RemoteAddressField;
use Shopware\Core\Framework\Log\Package;

/**
 * @internal
 *
 * @covers \Shopware\Core\Framework\DataAbstractionLayer\Field\RemoteAddressField
 */
#[Package('core')]
class RemoteAddressFieldTest extends TestCase
{
    public function testGetStorageName(): void
    {
        $field = new RemoteAddressField('remote_address', 'remoteAddress');

        static::assertEquals('remote_address', $field->getStorageName());
    }
}
