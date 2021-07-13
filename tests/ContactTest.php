<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{

    public function test_Contact_Class_Exists()
    {
        $this->assertTrue(class_exists(Contact::class));
    }

    public function test_getContactFName_Method_Exists()
    {
        $this->assertTrue(method_exists(Contact::class, 'getContactFName'));
    }
    
}