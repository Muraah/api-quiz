<?php
/*
  Consider the following string(bbit3c.txt)
  It constains names(surname,second_name,first_name),number,country and country code of some individuals

  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows

      a). first_name second_name,surname (# country_code(0) number[country])
      b). .......
      c). .......

    Summary
     -- Total names : total. (count)
     -- Total unique countries : total (count)(list of countries - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1)
 */

 $block="Chirakahula,Mukwana Joe.0500387482.UGANDA.+256|
 Wambua,Doe Mumbua.080023450.KENYA.+254|
 Vonbora,Katherina Luther.0600990033.GERMANY.+32
 |Boromir,Grommit Wallace.0100873901.IRELAND.+98
 |Piepont,Edwards Jonathan.0200983729.AMERICA.+1
 |Asaph,Elihu Mose.02990033.ISRAEL.+2
 |Otoyo,Wafula Joel.0777799920.KENYA.+254
 |Mapete,Mwambingu Simba.0987483292.TANZANIA.+257
 |SARATON,DAVID BREINARD.043899292.AMERICA.+1
 |POMPI,JOHN OWEN.074749292.ZAMBIA.+267
 |MAG,JOHN BUNYAN.09837328.UGANDA.+256
 |Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32
";

$block1 = str_replace("|",".",$block);
$block2= explode(".",$block1);
 $b=array_chunk($block2,4);

 echo "<ol>";
 $phone;
 $country;
 foreach ($b as $a) {
   // code...
   echo "<li>";
   foreach ($a as $key=>$value) {
     // code...

     if ($key==0) {
       // code...
       $st=explode(",",$value);
       $stq=explode(" ",$st[1]);
       $st1=substr_replace($value,", ".substr($value,0,strpos($value,',')),-1);

       $st1=$stq[1]." ".$stq[0].", ".$st[0];
       $value=$st1;
echo "{$value} ";
     }
     if ($key==3) {
       // code...

       $value="(#".$value." " . $phone. " [".$country."])";
echo "{$value} ";
     }
     if ($key==1) {

       // code...
       global $phone;
       $phone = $value;
       $phone=substr_replace($value,"(0)".substr($value,1),0);

// echo "{$value}";
     }
     if ($key==2) {
       // code...
       global $country;
       $country = $value;


     }

   }
   echo "</li>";
 }
 echo "</ol>";

$identity = array("Chirakahula,Mukwana Joe", "Mumbua Doe, Wambua", "Luther Katherina, Vonbora", "Wallace Grommit, Boromir", "Jonathan Edwards, Piepont", "Mose Elihu, Asaph", "Joel Wafula, Otoyo", "Simba Mwambingu, Mapete", "BREINARD DAVID, SARATON", "OWEN JOHN, POMPI", "BUNYAN JOHN, MAG", "Gregory Johann, Vonstaupitz");

 echo "Summary: <br> total names: ";
 echo count ($identity), "<br>";

$land = array("UGANDA", "KENYA", "GERMANY", "IRELAND", "AMERICA", "ISRAEL", "TANZANIA", "ZAMBIA");

 echo "total unique countries ";
 echo count ($land), "<br>";
 ?>
