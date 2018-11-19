<?php

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTest extends TestCase
{
  public function testSetUsername_validValue_successful()
  {
      $user = new User;
      $username = 'Yes';
      $user->setUsername($username);
      $this->assertEquals($username, $user->getUsername());
  }
}
