use strict;
use warnings;
 
my $filename = 'report.txt';
open(my $fh, '>', $filename) or die "Could not open file '$filename' $!";
print $fh "My first report generated by perl\n";
close $fh;
print "done\n";