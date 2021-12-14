<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('duman.fabian.g@gmail.com');
        $this->assertTrue($email);
    }
}
