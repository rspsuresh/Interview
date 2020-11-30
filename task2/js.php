<?php
$samplestr="NITIN";
$lengstr= strlen($samplestr);
$midpoint= floor($lengstr / 2);
$newStr='';

for($i=0;$i<=$lengstr;$i++){
   if($i==$midpoint){
       $newStr.=$samplestr;
   }else{
       for ( $j = 0; $j < $midpoint; $j++) {
           $newStr .= '&nbsp;&nbsp';
       }
       if(isset($samplestr[$i])){
           $newStr .= $samplestr[$i];
       }

   }
    $newStr .= '<br>';
}
echo $newStr;die;


/*const str = 'NITIN';

const { length } = str;

const midPoint = Math.floor(length / 2);

let newStr = '';

for (let i = 0; i < length; i++) {
    if (i === midPoint) {
        newStr += str;
    } else {
        for (let j = 0; j < midPoint; j++) {
            newStr += ' ';
        }
    newStr += str[i];
  }
    newStr += '\n';
}
console.log(newStr);*/
?>