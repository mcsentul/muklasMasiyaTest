@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Table list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <style>
  body {
    /*font-family: 'Helvetica', 'Arial', sans-serif;*/
    font-family: 'Lato', 'Arial', sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
  }
  table {
    font-size: 14;
    border-spacing: -1;
    border-collapse: collapse;

  }
  thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
  }
  .nav-tabs-custom {
    margin-bottom: 20px;
    background: #fff;
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  }
  .nav-tabs-custom > .header {
    font-weight: 400;
    line-height: 35px;
    padding: 0 10px;
    font-size: 20px;
    color: #444;
    cursor: default;
  }
  .nav-tabs>li>a {
    margin-right: 0px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    background-color: #e8e8e8;
    border-radius: 0px 0px 0 0;
    color:#949494 ;
  }


  .nav-tabs-custom > .nav-tabs {
    margin: 0;
    border-bottom-color: #f4f4f4;
  }
  .nav-tabs-custom > .tab-content {
    background: #fff;
    padding: 10px;
  }
  .nav-tabs>li.active> a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active> a:hover {
    
    cursor: default;
    background-color: #2ebcd2;
    border: 1px solid #ddd;
    color: #ecf0f1;
    border-bottom-color: transparent;
  }
  .nav-tabs-custom > .nav-tabs > li {
    border-top: 3px solid transparent;
    margin-bottom: -2px;
    margin-right: 5px;
  }

  .bg-masuk {
    background-color: #659330 !important;
  }
  .bg-cuty {
    background-color: #d74456 !important;
  }
  .bg-libur {
    background-color: #9b9b9b !important;
  }
  .badge {
    display: inline-block;
    min-width: 10px;
    width:  50px;
    padding: 6px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
  }
  .h3,  h3 {
    
    margin-top: 5px;
    margin-bottom: 3px;
    font-weight: bold;
  }
  .h5,  h5 {
   color: #0c0c0c;
   margin-top: 5px;
   margin-bottom: 3px;
   font-weight: bold;
 }
 .h6, h6 {
  color: #bdc3c7;
  margin-top: 2px;
  margin-bottom: 5px;
}
.warna1 {
 background-color: #2ebcd2;
 margin-bottom: -1px;

}
.warna2 {
 background-color: #25adc2;
 font-weight: bold;
}
tr {
  display: table-row;
  vertical-align: inherit;
  border-color: inherit;
  
}

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 0px solid #ddd;
}
.th2 {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}

th {    
  
  text-align: left;
  color: #ecf0f1;  
  border-top: 1px solid #3498db;   
}
</style>
</head>
<body>

  <div class="container">
    <br/>

    <div class="col-md-12">

      <!-- Custom Tabs (Pulled to the right) -->
      <div class="nav-tabs-custom">
       <div class="pull-left header"> <h3><b>Person</h3></div>
       <ul class="nav nav-tabs pull-right">
        <li class=""><a href="#tab_1-1" data-toggle="tab">By City</a></li>
        <li class="active"><a href="#tab_2-2" data-toggle="tab">By Department</a></li>
        

      </ul>
      <div class="tab-content">
        <div class="tab-pane" id="tab_1-1">
          <!-- //tab 1 -->
          <table class="table">
            
           <tbody>                                                                                     
            <tr class="warna1">
              <th>Name</th>                                                
              <th>City</th>
              <th>Department</th>                                                
              <th>Status</th>
            </tr>


            <tr class="warna2">

              <th>Bandung</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <?php
            
            
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($city=="Bandung"){
                                                           ?>
                                                           

                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>     



                                                    <tr class="warna2">

                                                      <th>Jakarta</th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                    </tr>
                                                    


                                                    <?php
                                                    
                                                    
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($city=="Jakarta"){
                                                           ?>
                                                           

                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>     

                                                    
                                                    <tr class="warna2">

                                                      <th>Malang</th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                    </tr>
                                                    <?php
                                                    
                                                    
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($city=="Malang"){
                                                           ?>
                                                           

                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>     
                                                    <tr class="warna2">

                                                      <th>Surabaya</th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                    </tr>
                                                    <?php
                                                    
                                                    
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($city=="Surabaya"){
                                                           ?>
                                                           

                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>     




                                                  </tbody>
                                                </table> 
                                              </div><!-- /.tab-pane -->
                                              <div class="tab-pane active" id="tab_2-2">
                                               
                                               
                                               <table class="table">
                                                
                                                 <tbody>                                                                                     
                                                  <tr class="warna1">
                                                    <th>Name</th>                                                
                                                    <th>City</th>
                                                    <th>Department</th>                                                
                                                    <th>Status</th>
                                                  </tr>

                                                  <tr class="warna2">

                                                    <th>Creative</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                  </tr>
                                                  <?php
                                                  
                                                  
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($Department=="Creative"){
                                                           ?>


                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>     
                                                    <tr class="warna2">

                                                      <th>IT</th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                    </tr>
                                                    <?php
                                                    
                                                    
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($Department=="IT"){
                                                           ?>


                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>                                                                                                                            
                                                    <tr class="warna2">

                                                      <th>Marketing</th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                    </tr>
                                                    <?php
                                                    
                                                    
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($Department=="Marketing"){
                                                           ?>


                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>           
                                                    
                                                    
                                                    <tr class="warna2">
                                                      <th>Sales</th>
                                                      <th></th>
                                                      <th></th>
                                                      <th></th>
                                                    </tr>
                                                    <?php
                                                    
                                                    
                                                   foreach ($data as $rows => $values) { // row
                                                        foreach ($values as $anotherkey => $vala) { //field
                                                         foreach ($vala as $anotherkeyagain => $val) {
                                                           
                                                          foreach ($val as $key => $valx) {
                                                                //echo $anotherkeyagain2.'apa yah'.$valx.'<br>';
                                                            if($key==0){
                                                              $id=$valx;
                                                            }else if($key==1){
                                                              $name=$valx;
                                                            }else if($key==2){
                                                              $position=$valx;
                                                            }else if($key==3){
                                                              $city=$valx;
                                                            }else if($key==4){
                                                              $email=$valx;
                                                            }else if($key==5){
                                                              $Department=$valx;
                                                            }else if($key==6){
                                                              $avatar=$valx;
                                                            }else if($key==7){
                                                              $status=$valx;
                                                            }

                                                              //$mydata[]=$valx;
                                                          }
                                                              // table disini 
                                                          if($Department=="Sales"){
                                                           ?>


                                                           <tr class="th2">
                                                            <td><h5><?php echo $name; ?></h5><h6><?php echo $position; ?></h6></td>
                                                            <td><?php echo $city; ?></td>
                                                            <td><?php echo $Department; ?></td>
                                                            <td>
                                                              <?php if($status==1){
                                                                echo "<span class=\"badge bg-masuk\">masuk</span>";
                                                              }else if($status==2){
                                                                echo "<span class=\"badge bg-cuty\">cuti</span>";
                                                              }else if($status==3){
                                                                echo "<span class=\"badge bg-libur\">libur</span>";
                                                              }
                                                              ?>
                                                            </td>
                                                          </tr>
                                                          <?php }
                                                        }

                                                      }

                                                    }
                                                    ?>    
                                                    
                                                  </tbody>
                                                </table>       
                                              </div><!-- /.tab-pane -->
                                            </div><!-- /.tab-content -->
                                          </div><!-- nav-tabs-custom -->
                                        </div>


                                      </div>
                                      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                                    </body>



                                    </html>
@endsection
