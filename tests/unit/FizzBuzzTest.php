<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__. '/FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
  public function testFizzBuzzReturnsOneWhenGivenOne()
  {
    $this->assertEquals(1,fizzBuzz(1));
  }

  public function testFizzBuzzReturnsTwoWhenGivenTwo()
  {
    $this->assertEquals(2,fizzBuzz(2));
  }

  public function testFizzBuzzReturnsFizzWhenGivenThree()
  {
    $this->assertEquals('Fizz',fizzBuzz(3));
  }

  public function testFizzBuzzReturnsFourWhenGivenFour()
  {
    $this->assertEquals(4,fizzBuzz(4));
  }

  public function testFizzBuzzReturnsBuzzWhenGivenFive()
  {
    $this->assertEquals('Buzz',fizzBuzz(5));
  }

  public function testFizzBuzzReturnsFizzWhenGivenSix()
  {
    $this->assertEquals('Fizz',fizzBuzz(6));
  }

  public function testFizzBuzzReturnsFizzWhenGivenNine()
  {
    $this->assertEquals('Fizz',fizzBuzz(9));
  }

  public function testFizzBuzzReturnsBuzzWhenGivenTen()
  {
    $this->assertEquals('Buzz',fizzBuzz(10));
  }

  public function testFizzBuzzReturnsFizzWhenGivenTwelve()
  {
    $this->assertEquals('Fizz',fizzBuzz(12));
  }

  public function testFizzBuzzReturnsFizzbuzzWhenGiven15()
  {
    $this->assertEquals('Fizzbuzz',fizzBuzz(15));
  }

}
