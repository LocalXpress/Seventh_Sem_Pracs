$string="SomeRandomGeneratedString";

if($string=~m/a*|bc$/)
 {
 	print "Something!!";
 }
 else
 {
 	print "Anything!!!";
 }


if($string=~m/a*|b{2,}$/)
 {
 	print "Something!!";
 }
 else
 {
 	print "Anything!!!";
 }


if($string=~m/a*|b{3}/)
 {
 	print "Something!!";
 }
 else
 {
 	print "Anything!!!";
 }