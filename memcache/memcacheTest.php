<?php
/*
$mem = new Memcache;
$mem->connect('127.0.0.1',11211);
$mem->set('test','hello',0,12);
echo $mem->get('test');

$memd = new Memcached();
$arr = array(
	array('127.0.0.1',11211),
	//array('127.0.0.2',11211),
);
$memd->addServers($arr);
print_r($memd->getVersion());
echo "<br/>";
//print_r($memd->getStats());
//$memd->add('mkey','mvalue',600);
$memd->set('mkey','mvalue',600);
//$memd->replace('mkey','mvalue2',600);
echo $memd->get('mkey');
$memd->delete('mkey');
//$memd->flush(); //慎用
//$memd->set('num',1,0);
//$memd->increment('num',5);
$memd->decrement('num',5);
echo $memd->get('num');
$data = array(
	'key1' => 'value1',
	'key2' => 'value2',
);

$memd->setMulti($data);
$result = $memd->getMulti(array('key1','key2'));
//$memd->deleteMulti(array('key1','key2'));
print_r($result);
echo $memd->getResultCode();
echo $memd->getResultMessage();
*/
include 'memcached.class.php';
$m = new Mem();
$m->addServer(array(array('127.0.0.1', 11211)));
echo $m->s('key', 'value', 1800);
echo $m->s('key');
$m->s('key', NULL);
echo $m->s('key');
echo $m->getError();
?>