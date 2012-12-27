<?php
class Tap
{
   protected $pressure_ = 0;
   
   public function __construct ($run = true)
   {
      $this->say ("I'm a tap!");
     
      if ( $run )
      {
         $this->run ();
      }
   }
   
   public function decrease_pressure ()
   {
      $this->pressure_ /= 1.25;
     
      if ( $this->pressure_ == 0 )
      {
         $this->stop ();
      }
   }
   
   public function increase_pressure ()
   {
      $this->pressure_ *= 1.25;
     
      if ( $this->pressure_ > 20 )
      {
         $this->explode ();
      }
   }
   
   public function run ()
   {
      if ( $this->pressure_ != 0 )
      {
         $this->say ("I'm already running!");
      }
      else
      {
         $this->pressure = 4;
         
         $this->say ('Catch me if you can!');
      }
   }
   
   public function stop ()
   {
      if ( $this->pressure_ != 0 )
      {
         $this->pressure_ = 0;
         
         $this->say ('I have stopped!');
      }
      else
      {
         $this->say ("I'm not running!");
      }
   }
   
   public function explode ()
   {
      $this->say ('Bang!');
   }
   
   public function say ($string)
   {
      echo "Tap: {$string}<br />\n";
   }
}
