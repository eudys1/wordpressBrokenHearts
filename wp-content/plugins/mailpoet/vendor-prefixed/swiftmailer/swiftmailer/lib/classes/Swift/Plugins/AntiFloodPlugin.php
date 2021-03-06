<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
class Swift_Plugins_AntiFloodPlugin implements Swift_Events_SendListener, Swift_Plugins_Sleeper
{
 private $threshold;
 private $sleep;
 private $counter = 0;
 private $sleeper;
 public function __construct($threshold = 99, $sleep = 0, Swift_Plugins_Sleeper $sleeper = null)
 {
 $this->setThreshold($threshold);
 $this->setSleepTime($sleep);
 $this->sleeper = $sleeper;
 }
 public function setThreshold($threshold)
 {
 $this->threshold = $threshold;
 }
 public function getThreshold()
 {
 return $this->threshold;
 }
 public function setSleepTime($sleep)
 {
 $this->sleep = $sleep;
 }
 public function getSleepTime()
 {
 return $this->sleep;
 }
 public function beforeSendPerformed(Swift_Events_SendEvent $evt)
 {
 }
 public function sendPerformed(Swift_Events_SendEvent $evt)
 {
 ++$this->counter;
 if ($this->counter >= $this->threshold) {
 $transport = $evt->getTransport();
 $transport->stop();
 if ($this->sleep) {
 $this->sleep($this->sleep);
 }
 $transport->start();
 $this->counter = 0;
 }
 }
 public function sleep($seconds)
 {
 if (isset($this->sleeper)) {
 $this->sleeper->sleep($seconds);
 } else {
 \sleep($seconds);
 }
 }
}
