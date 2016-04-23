<?php
require_once '../include.php';
$CSEInfo = fopen('https://www.cse.ust.hk/admin/people/faculty/?display=profiles',"r");
$professorInfo=array();
//preg_match_all('/<div class="faculty_info">\n(.*)<br>/i', $CSEInfo, $professorInfo['name']);
//var_dump($professorInfo['name']);
$position=0;
$profile='<div class="faculty_profile">';
while(!feof($CSEInfo)){
    $line=fgets($CSEInfo);
    if(strpos($line, $profile)!==false){
       // var_dump($line);
        $count=1;
        $innerpos=0;
        $professorInfo[$position][$innerpos]=$line;
        while($count!==0){
            $innerpos++;
            $line=fgets($CSEInfo);
            if(strpos($line, '<div')!==false)
                $count++;
            if(strpos($line, '</div>')!==false)
                $count--;
            $professorInfo[$position][$innerpos]=$line;
        }
        $position++;
    }
}
$professorStr=array();
foreach($professorInfo as $personalInfo){
    $professorStr[$count]=implode('', $professorInfo[$count]);
    $count++;
}
$count=0;
$professor=array();
$revisedPro=array();
foreach($professorStr as $person){
    //name match
    preg_match('/<div class="faculty_info">\n(.*)<br>/i', $person, $professor[$count]['name']);
    $revisedPro[$count]['name']=$professor[$count]['name'][1];


    //image source match
    preg_match('/src="(.*)\.jpg"/i', $person, $professor[$count]['image']);
    $revisedPro[$count]['image']=$professor[$count]['image'][1].".jpg";


    ////Research area match
    preg_match('/Research Area:(.*)<br>/i', $person, $professor[$count]['research']);
    $revisedPro[$count]['research']=$professor[$count]['research'][1];


    //email match
    preg_match('/<script>mmsend\(\'(.*)\'\)<\/script>/i', $person, $professor[$count]['email']);
    $revisedPro[$count]['email']=$professor[$count]['email'][1]."@cse.ust.hk";


    //homepage match
    preg_match('/Homepage: <a href=".*">(.*)<\/a>/i', $person, $professor[$count]['homepage']);
    $revisedPro[$count]['homepage']=$professor[$count]['homepage'][1];

    $count++;
}
foreach($revisedPro as $faculty){
    $faculty['department']='CSE';
    $faculty['star']=0;
    //var_dump($faculty);
    insert('professor', $faculty,$link);
}
//var_dump($professor);
?>