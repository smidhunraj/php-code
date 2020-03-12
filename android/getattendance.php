<?php
header('Access-Control-Allow-Origin: *');
header('Content-type:application/json;charset=utf-8');

$foo = file_get_contents("php://input");

$data=json_decode($foo, true);

if($data['month']=="3"){$arr=  '[{
   "id": "1",
   "date": "2020-03-19",
   "status": "present",
   "studentid": "1"
  },
  {
   "id": "2",
   "date": "2020-03-24",
   "status": "present",
   "studentid": "1"
  },
  {
   "id": "3",
   "date": "2020-03-25",
   "status": "absent",
   "studentid": "1"
  },
  {
   "id": "4",
   "date": "2020-03-26",
   "status": "absent",
   "studentid": "1"
  }
 ]';
}
else{

$arr=  '[{
   "id": "1",
   "date": "2020-04-14",
   "status": "present",
   "studentid": "1"
  },
  {
   "id": "2",
   "date": "2020-04-15",
   "status": "present",
   "studentid": "1"
  },
  {
   "id": "3",
   "date": "2020-04-24",
   "status": "absent",
   "studentid": "1"
  },
  {
   "id": "4",
   "date": "2020-04-29",
   "status": "absent",
   "studentid": "1"
  }
 ]';
}


echo $arr;
?>
