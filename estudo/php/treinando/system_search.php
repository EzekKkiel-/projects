<?php
 
// per page record
$per_page = 10;
 
// current page
if(!isset($_GET['page'])){
$page = 1;
}
else{
$page = (int) $_GET['page'];
}
 
// mysql start position
if($page<=1){
 
        $start = 0;
}
else{
 
        $start = $page * $per_page - $per_page;
}
 
 
//mysql connnect
$con = mysql_connect('localhost','root','');
mysql_select_db('page', $con);
 
//main sql query
$sql = "SELECT * FROM pagination";
 
// how much record in  table
$num_rows = mysql_num_rows(mysql_query($sql));
 
// how many pages are at all
$num_pages = (int) ceil($num_rows / $per_page);
 
// appends query
$sql .= " LIMIT $start, $per_page";
 
// show all records
$result = mysql_query($sql);
 
while($row  = mysql_fetch_array($result)){
print $row['name']."<br />\n";
}
 
//prev, numbers next
$prev = $page - 1;
$next = $page + 1;
 
//pagnation
print "<hr />";
 
//previous link
if($prev>0){
print "<a href=\"?page=$prev\">Previous </a>";
}
 
//page numbers
$number = 1;
while($number<=$num_pages){
        if($page==$number){
 
                print "<b>[$number]</b>";
       
        }
                else
print "<a href=\"?page=$number\">$number </a>";
 
$number++;
 
}
 
//next line
if($page<ceil($num_rows / $per_page)){
print "<a href=\"?page=$next\">Next</a>";
 
}
 
mysql_close($con);
?>