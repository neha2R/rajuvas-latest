<style>
.cspan {
 display: inline-block;
    padding: 6px 15px 4px;
    border-radius: 3px;
    background: linear-gradient(to bottom, #CFDEF3, #E0EAFC);
    margin-right: -2px;
    color: #000;
    font-size: 20px;
    letter-spacing: 10px;
}
/*.center {*/
/*  text-align: center;*/
/*  width: 50%;*/
/*  margin: 20px auto;*/
/*}*/
.message {
  color: #ccc6e3;
  font-family: Verdana;
  font-size: 12px;
}
.counts{
    float: right;
    margin-top: 30px;
    position: relative;
    left: 100px;
}
.hcounts{
    color: #fff;
    float: right;
    position: relative;
    left: -55px;}
@media only screen and (max-width: 600px) {
.counts{
    float: right;
    margin-top: 30px;
    position: relative;
    left: 0px;
}
}
@media only screen and (min-width: 600px) {
.counts{
    float: right;
    margin-top: 30px;
    position: relative;
    left: 0px;
}
}
@media only screen and (min-width: 768px) {
.counts{
    float: right;
    margin-top: 30px;
    position: relative;
    left: 100px;
}
}
</style><?php
//echo $_SERVER['DOCUMENT_ROOT'];
           $count_file ='/var/www/html/wp-content/themes/rajuvas/countlog.txt';
           $ip_file = '/var/www/html/wp-content/themes/rajuvas/ip.txt';
           
           if(!file_exists($count_file)){
               fopen($count_file, 'w');
               
           }
           
           if(!file_exists($ip_file)){
               fopen($count_file, 'w');
           }
           $ip =$_SERVER['REMOTE_ADDR'];
          $counter = fopen("/var/www/html/wp-content/themes/rajuvas/countlog.txt", "r");
          $count = fgets($counter, 1000);
          fclose($counter);
          $count = $count + 1;
          ?>
          <div class=""><h3 class="hcounts" style="color:#fff;">Visitor Counter  </h3> </div>
          <div class="counts"><span class="cspan"><?php echo $count;?></span></div>
          <?php           
           if(!in_array($ip, file($ip_file, FILE_IGNORE_NEW_LINES))){
              
              
               $hit_counter = (file_exists($count_file))? file_get_contents($count_file) : 0;
               
               file_put_contents($ip_file, $ip."\n",FILE_APPEND);
                //echo "call";
               file_put_contents($count_file, ++$hit_counter);
           }
          
?>

