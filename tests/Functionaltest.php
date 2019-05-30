<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class loginfrobook extends TestCase
{
    public function testCanBeCreatedFromValidloginforbook(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('skpatel5594@gmail.com is a valid emailAddress')
        );
    }

    public function testCannotBeCreatedFromInvalidloginforbook(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Emailid::fromString('user@example.com')
        );
    }
}
