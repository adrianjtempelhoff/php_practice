<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    protected $user;

    public function setUp(): void
    {
        $this->user = new \App\Models\User;
    }

    //public function testThatWeCanGetTheFirstName()
    /** @test */
    public function that_we_can_get_the_first_name()
    {
        $this->user->setFirstName('Alice');

        $this->assertEquals($this->user->getFirstName(), 'Alice');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;

        $user->setLastName('Smith');

        $this->assertEquals($user->getLastName(), 'Smith');
    }

    public function testFullNameIsReturned()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Alice');
        $user->setLastName('Smith');

        $this->assertEquals($user->getFullName(), 'Alice Smith');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;
        $user->setFirstName('   Alice    ');
        $user->setLastName('  Smith  ');

        $this->assertEquals($user->getFirstName(), 'Alice');
        $this->assertEquals($user->getLastName(), 'Smith');
    }

    public function testEmailAddressCanBeSetAndGet()
    {
        $user = new \App\Models\User;

        $user->setEmailAddress('alicesmith@email.com');

        $this->assertEquals($user->getEmailAddress(), 'alicesmith@email.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Alice');
        $user->setLastName('Smith');
        $user->setEmailAddress('alicesmith@email.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Alice Smith');
        $this->assertEquals($emailVariables['email'], 'alicesmith@email.com');

        /*[
            'fullname' => 'Alice Smith',
            'email' => 'alicesmith@email.com'
        ]*/
    }
}

?>
